<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        dd(Auth::user()); // Controleer of de gebruiker correct geladen is
        $blogs = Blog::all(); // Haal alle blogs op

        return view('blogs.index', compact('blogs')); // Render de view met blogs
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('blogs.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
    ]);

    Blog::create([
        'title' => $request->title,
        'content' => $request->content,
        'user_id' => auth()->id(),
    ]);

    return redirect()->route('blogs.index'); // Redirect naar de index
}

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
{
    return view('blogs.show', compact('blog'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
