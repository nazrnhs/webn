<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $like = Like::all();

        return $like;
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate ([
            'title' => ['required']
        ]);

        $like = Like::create($validated);

        return $like;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $like = Like::findOrFail($id);

        return $like;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request -> validate([
            'title' => ['required']
        ]);

        $like = Like::findOrFail($id);

        $like -> update($validated);

        return $like;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $like =Like::findOrFail($id);

        return response()->json([], 204);
    }
}
