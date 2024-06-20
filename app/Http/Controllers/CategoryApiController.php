<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Fetch all categories
        $categories = Category::all();

        //Pass retrieved categories to the view
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'title' => ['required']
        ]);

        $category = Category::create($validated);

        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $categoryId)
    {
        $category = Category::findOrFail($categoryId);

        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $categoryId)
    {
        $title = $request->input('title');

        $category = Category::findOrFail($categoryId);

        $category -> update ([
            "title" => $title
        ]);

        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $categoryId)
    {
        $category = Category::findOrFail($categoryId);

        $category -> delete();

        return response()->json([] , 204);
    }
}
