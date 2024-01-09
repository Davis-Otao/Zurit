<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{
    public function index()
    {
        // Retrieve books data from the database
        $blogs = Blog::all();

    // Return the 'books' view and pass the $books variable to it
    return view('blogs', compact('blogs'));
    }
    public function create()
    {
        return view('blogs');
    }
    public function store(Request $request)
    {
        $request->validate([
            'blog_tag' => 'required',
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'blog_title' => 'required',
            'blog_summary' => 'required',
            'blog_message' => 'required',
        ]);

        $imageName = ''; // Initialize image name variable

        // Handle file upload
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('blogs_res/img'), $imageName);
        }

        // Create blog with file path
        Blog::create([
            'blog_tag' =>$request->input('blog_tag'),
            'blog_image' => $imageName,
            'blog_title' => $request->input('blog_title'),
            'blog_summary' => $request->input('blog_summary'),
            'blog_message' => $request->input('blog_message'),
        ]);
        return redirect()->route('blogs_admindash')->with('success', 'Blog added successfully.');
    }
    public function show($id)
    {
        return view('blogs');
    }
    public function edit($id)
    {
        return view('blogs');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'blog_tag' => 'required',
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'blog_title' => 'required',
            'blog_summary' => 'required',
            'blog_message' => 'required',
        ]);

        $imageName = ''; // Initialize image name variable

        // Handle file upload
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('blogs_res/img'), $imageName);
        }

        // Create book with file path
        Blog::create([
            'blog_tag' =>$request->input('blog_tag'),
            'blog_image' => $imageName,
            'blog_title' => $request->input('blog_title'),
            'blog_summary' => $request->input('blog_summary'),
            'blog_message' => $request->input('blog_message'),
        ]);

        return redirect()->route('blogs_admindash')->with('success', 'Blog added successfully.');


    }
    public function destroy($id)
    {
        return view('blogs');
    }
    public function showUserHome()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(7)->get();
        return view('userhome', ['blogs' => $blogs]);
    }

    public function showuser_budgetplanner()
    {
        return view('user_budgetplanner');
    }

    public function showuser_networthcalc()
    {
        return view('user_networthcalc');
    }
    public function showuser_investmentplanner()
    {
        return view('user_investmentplanner');
    }
    public function showuser_debtcalc()
    {
        return view('user_debtcalc');
    }

}