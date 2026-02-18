<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact');
    }

    public function getStoredMessages(Request $request )
    {
        try{
            $getStored = Contact::all();
            return response()->json([
                'storedMessages' => $getStored,
                'message' => 'successful'
            ], 200);

        } catch (\Exception $e){
             Log::error('Error while retreiving messages: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
        }

    }


    // stores message
    public function store(Request $request, \App\Services\GhlService $ghlService)
    {
        try {
            Log::info('Contact form received data:', $request->all()); // Debug log
    
            // Validate request data
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'appointment_date' => 'required|date',
                'appointment_time' => 'required|date_format:H:i',
                'selected_plan' => 'nullable|string|max:255',
                'message' => 'required',
            ]);
            
            $contactData = [
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'appointment_date' => $validated['appointment_date'],
                'appointment_time' => $validated['appointment_time'],
                'selected_plan' => $validated['selected_plan'] ?? null,
                'message' => $validated['message'],
            ];


    
            // Store contact in the database
            $contact = Contact::create($contactData);

            // Push to GHL
            $ghlService->createContact([
                'firstName' => $validated['first_name'],
                'lastName' => $validated['last_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'customFields' => [
                    ['id' => config('services.ghl.custom_fields.appointment_date'), 'value' => $validated['appointment_date']],
                    ['id' => config('services.ghl.custom_fields.appointment_time'), 'value' => $validated['appointment_time']],
                    ['id' => config('services.ghl.custom_fields.selected_plan'), 'value' => $validated['selected_plan'] ?? 'None'],
                    ['id' => config('services.ghl.custom_fields.message'), 'value' => $validated['message']],
                ]
            ]);
    
            // Send email to admin
            // Mail::to('info@breemhealth.com')->send(new ContactMail($contact));
    
            Log::info('Contact form submitted successfully.', ['contact' => $contact]);
    
            return back()->with('success', 'Message sent successfully!')->with('contact_data', $validated);


        } catch (\Exception $e) {
            Log::error('Error in contact form submission: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
    
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    // Newsletter subscription
    public function subscribe(Request $request, \App\Services\GhlService $ghlService)
    {
        try {
            Log::info('Newsletter subscription received:', $request->all());
    
            // Validate request data
            $validated = $request->validate([
                'email' => 'required|email|max:255',
            ]);
    
            // Push to GHL
            $ghlService->createContact([
                'email' => $validated['email'],
                'customFields' => [
                    ['id' => 'subscription_type', 'value' => 'Newsletter'],
                ]
            ]);
    
            Log::info('Newsletter subscription sent to GHL.', ['email' => $validated['email']]);
    
            return back()->with('success', 'Successfully subscribed to our newsletter!');
    
        } catch (\Exception $e) {
            Log::error('Error in newsletter subscription: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
    
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
