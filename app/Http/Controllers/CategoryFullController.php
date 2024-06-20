<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryFullController extends Controller
{
    public function index(Request $request) {

        $categories = Category::all();



        if ($request->expectsJson()){
            return $categories;
        }

        return view('categories', ['categories'=> $categories]) ;
    }


    public function create() {
        return view('categories-create');
    }

    public function store(Request $request) {

        $validated = $request -> validate([
            'title' => ['required']
        ]);

        $category = Category::create($validated);

        if ($request -> expectsJson()) {

            return $category;
        }

        return redirect(route('categories.index'));
    }
    public function show(Request $request, int $categoryId) {

        $category = Category::findOrFail($categoryId);

        if ($request -> expectsJson()) {

            return $category;
        }

        return view('categories-show', ['category'=>$category]);
    }


    public function destroy(Request $request, int $categoryId) {

        $category = Category::findOrFail($categoryId);

        $category -> delete();

        if ($request -> expectsJson()) {

            return response()->json([], 204);
        }

        return redirect(route('categories.index'));

    }

    public function edit(int $categoryId) {
        $category = Category::findOrFail($categoryId);
        return view('categories-edit', ['category' => $category]);
    }


    public function update(Request $request, $categoryId)
    {
        $title = $request->input('title');

        $category = Category::findOrFail($categoryId);

        $category -> update ([
            "title" => $title
        ]);

        if ($request -> expectsJson()) {

            return $category;
        }

        return redirect(route('categories.index'));
    }

}
