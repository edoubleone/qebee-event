<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Services\GhlService;

// Public Routes
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/consultation', [PageController::class, 'consultation'])->name('consultation');
Route::get('/Eru-Iyawo-Packages', [PageController::class, 'eruIyawoPackages'])->name('eru-iyawo-packages');
Route::get('/baby-shower', [PageController::class, 'babyShower'])->name('baby-shower');
Route::get('/wedding', [PageController::class, 'wedding'])->name('wedding');
Route::get('/theme-party', [PageController::class, 'themeParty'])->name('theme-party');
Route::get('/personal-shopper', [PageController::class, 'personalShopper'])->name('personal-shopper');
Route::get('/event', [PageController::class, 'event'])->name('event');
Route::get('/quotation', [PageController::class, 'quotation'])->name('quotation');
Route::get('/about-her', [PageController::class, 'aboutHer'])->name('about-her');

Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogPost'])->name('blog.show');
Route::get('/service/{id}', [PageController::class, 'serviceDetails'])->name('service.show');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/security', [PageController::class, 'security'])->name('security');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Newsletter subscription
Route::post('/subscribe', [ContactController::class, 'subscribe'])->name('subscribe');

Route::get('/appointment', [AppointmentController::class, 'appointment'])->name('appointment');

// Test GHL API Integration
Route::get('/test-ghl-api', function () {
    try {
        $ghlService = new GhlService();
        
        // Test basic API connectivity by trying to fetch products
        $result = $ghlService->getProducts();
        
        if ($result) {
            return response()->json([
                'status' => 'success',
                'message' => 'GHL API integration is working!',
                'data' => $result
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'GHL API returned no data. Check logs for details.',
            ], 400);
        }
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error('GHL API Test Error: ' . $e->getMessage());
        return response()->json([
            'status' => 'error',
            'message' => 'GHL API test failed: ' . $e->getMessage(),
        ], 500);
    }
});

// Authenticated / Admin Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Dashboard & Management
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    
    // Blog Management
    Route::get('/admin/blog', [AdminController::class, 'blogIndex'])->name('admin.blog.index');
    Route::post('/admin/blog', [AdminController::class, 'storeBlog'])->name('admin.blog.store');
    Route::delete('/admin/blog/{id}', [AdminController::class, 'deleteBlog'])->name('admin.blog.delete');
    
    // Image Management
    Route::get('/admin/image', [AdminController::class, 'imageIndex'])->name('admin.image.index');
    Route::post('/admin/image', [AdminController::class, 'storeImage'])->name('admin.image.store');
    
    // Video Management
    Route::get('/admin/video', [AdminController::class, 'videoIndex'])->name('admin.video.index');
    Route::post('/admin/video', [AdminController::class, 'storeVideo'])->name('admin.video.store');

    // Team Management
    Route::get('/admin/team', [AdminController::class, 'teamIndex'])->name('admin.team.index');
    Route::post('/admin/team', [AdminController::class, 'storeTeam'])->name('admin.team.store');
    Route::delete('/admin/team/{id}', [AdminController::class, 'deleteTeam'])->name('admin.team.delete');

    // Service Management
    Route::get('/admin/service', [AdminController::class, 'serviceIndex'])->name('admin.service.index');
    Route::post('/admin/service', [AdminController::class, 'storeService'])->name('admin.service.store');
    Route::delete('/admin/service/{id}', [AdminController::class, 'deleteService'])->name('admin.service.delete');

    // General Gallery Delete (Shared for both)
    Route::delete('/admin/gallery/{id}', [AdminController::class, 'deleteGallery'])->name('admin.gallery.delete');
});

require __DIR__.'/auth.php';
