<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::all();

        return $blog;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'title' => ['required'],
            'content' => ['required']
        ]);

        $blog = Blog::create($validated);

        return $blog;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog =Blog::findOrFail($id);

        return  $blog;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request -> validate([
           'title' => ['required'],
           'content' => ['required']
        ]);

        $blog =Blog::findOrFail($id);

        $blog -> update($validated);

        return $blog;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = BLog::findOrFail($id);

        $blog->delete();

        return response()->json([], 204);
    }
}
