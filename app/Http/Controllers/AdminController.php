<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\GalleryItem;
use App\Models\TeamMember;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    // Blog Management
    public function blogIndex()
    {
        $posts = BlogPost::latest()->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function storeBlog(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('blog_images', 'public');
            $path = $request->file('image')->store('blog_images', 'cloudinary');
            $imagePath = Storage::disk('cloudinary')->url($path);
        }

        BlogPost::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . uniqid(),
            'content' => $request->content,
            'image_path' => $imagePath,
            'is_published' => true,
        ]);

        return redirect()->back()->with('success', 'Blog post created successfully!');
    }

    public function deleteBlog($id)
    {
        $post = BlogPost::findOrFail($id);
        // Deleting from Cloudinary is complex if we only stored URL. 
        // For simplicity, we just delete the record. 
        // If we want to delete from Cloudinary, we need the public ID.
        // Usually, storing the public ID or just leaving it is fine for now.
        // If local file, delete it.
        if ($post->image_path && !Str::startsWith($post->image_path, 'http')) {
             Storage::disk('public')->delete($post->image_path);
        }
        $post->delete();
        return redirect()->back()->with('success', 'Blog post deleted!');
    }

    // Image Management
    public function imageIndex()
    {
        $images = GalleryItem::where('type', 'image')->latest()->get();
        return view('admin.image.index', compact('images'));
    }

    public function storeImage(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
        ]);

        // $filePath = $request->file('file')->store('gallery_uploads', 'public');
        $path = $request->file('file')->store('gallery_uploads', 'cloudinary');
        $filePath = Storage::disk('cloudinary')->url($path);

        GalleryItem::create([
            'title' => $request->title,
            'type' => 'image',
            'file_path' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }

    // Video Management
    public function videoIndex()
    {
        $videos = GalleryItem::where('type', 'video')->latest()->get();
        return view('admin.video.index', compact('videos'));
    }

    public function storeVideo(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'file' => 'required|file|mimes:mp4,mov,ogg,qt|max:51200', // 50MB max
        ]);

        // $filePath = $request->file('file')->store('gallery_uploads', 'public');
        $path = $request->file('file')->store('gallery_uploads', 'cloudinary');
        $filePath = Storage::disk('cloudinary')->url($path);

        GalleryItem::create([
            'title' => $request->title,
            'type' => 'video',
            'file_path' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Video uploaded successfully!');
    }

    public function deleteGallery($id)
    {
        $item = GalleryItem::findOrFail($id);
        if ($item->file_path && !Str::startsWith($item->file_path, 'http')) {
            Storage::disk('public')->delete($item->file_path);
        }
        $item->delete();
        return redirect()->back()->with('success', 'Media deleted!');
    }

    // Team Management
    public function teamIndex()
    {
        $teamMembers = TeamMember::latest()->get();
        return view('admin.team.index', compact('teamMembers'));
    }

    public function storeTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('team_images', 'public');
            $path = $request->file('image')->store('team_images', 'cloudinary');
            $imagePath = Storage::disk('cloudinary')->url($path);
        }

        TeamMember::create([
            'name' => $request->name,
            'role' => $request->role,
            'bio' => $request->bio,
            'image_path' => $imagePath,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
        ]);

        return redirect()->back()->with('success', 'Team member added successfully!');
    }

    public function deleteTeam($id)
    {
        $member = TeamMember::findOrFail($id);
        if ($member->image_path && !Str::startsWith($member->image_path, 'http')) {
            Storage::disk('public')->delete($member->image_path);
        }
        $member->delete();
        return redirect()->back()->with('success', 'Team member deleted!');
    }

    // Service Management
    public function serviceIndex()
    {
        $services = Service::latest()->get();
        return view('admin.service.index', compact('services'));
    }

    public function storeService(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|string|max:255',
        ]);

        // $imagePath = $request->file('image')->store('service_images', 'public');
        $path = $request->file('image')->store('service_images', 'cloudinary');
        $imagePath = Storage::disk('cloudinary')->url($path);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            'link' => $request->link,
        ]);

        return redirect()->back()->with('success', 'Service added successfully!');
    }

    public function deleteService($id)
    {
        $service = Service::findOrFail($id);
        if ($service->image_path && !Str::startsWith($service->image_path, 'http')) {
            Storage::disk('public')->delete($service->image_path);
        }
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted!');
    }
}
