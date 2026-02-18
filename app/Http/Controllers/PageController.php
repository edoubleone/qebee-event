<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\GalleryItem;
use App\Models\TeamMember;
use App\Models\Service;

class PageController extends Controller
{
    public function home()
    {
        $posts = BlogPost::where('is_published', true)->latest()->take(3)->get();
        $galleryItems = GalleryItem::latest()->take(8)->get();
        $teamMembers = TeamMember::latest()->get();
        $services = Service::latest()->get();
        return view('index', compact('posts', 'galleryItems', 'teamMembers', 'services'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $services = Service::latest()->get();
        return view('services', compact('services'));
    }

    public function serviceDetails($id)
    {
        $service = Service::findOrFail($id);
        return view('service-details', compact('service'));
    }

    public function consultation()
    {
        return view('consultation');
    }

    public function eruIyawoPackages()
    {
        return view('Eru-Iyawo-Packages');
    }

    public function babyShower()
    {
        return view('baby-shower');
    }

    public function wedding()
    {
        return view('wedding');
    }

    public function themeParty()
    {
        return view('theme-party');
    }

    public function personalShopper()
    {
        return view('personal-shopper');
    }

    public function event()
    {
        return view('event');
    }

    public function quotation()
    {
        return view('quotation');
    }

    public function aboutHer()
    {
        return view('about-her');
    }

    public function contact()
    {
        return view('contact');
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function pricing(\App\Services\GhlService $ghlService)
    {
        $products = $ghlService->getProducts();
        return view('pricing', compact('products'));
    }

    public function gallery()
    {
        $galleryItems = GalleryItem::latest()->paginate(12);
        return view('gallery', compact('galleryItems'));
    }

    public function team()
    {
        $teamMembers = TeamMember::latest()->get();
        return view('team', compact('teamMembers'));
    }

    public function blog()
    {
        $posts = BlogPost::where('is_published', true)->latest()->paginate(5);
        return view('blog', compact('posts'));
    }

    public function blogPost($slug)
    {
        $post = BlogPost::where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('blog-details', compact('post'));
    }

    public function faq()
    {
        return view('faq');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function security()
    {
        return view('security');
    }

    public function terms()
    {
        return view('term');
    }
}
