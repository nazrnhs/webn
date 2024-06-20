<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index() {

        $categories = Category::all();

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

        return redirect(route('categories.index'));
    }
        public function show(int $categoryId) {

        $category = Category::findOrFail($categoryId);

        return view('categories-show', ['category'=>$category]);
    }


    public function destroy(int $categoryId) {

        $category = Category::findOrFail($categoryId);

        $category -> delete();

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

        return redirect(route('categories.index'));
    }
}
