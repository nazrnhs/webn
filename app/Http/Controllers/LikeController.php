<?php

namespace App\Http\Controllers;

use App\Models\Like;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index() {

        $likes = Like::all();

        return view('categories', ['categories'=> $likes]) ;
    }


    public function create() {
        return view('categories-create');
    }

    public function store(Request $request) {

        $validated = $request -> validate([
           'title' => ['required']
        ]);

        $likes = Like::create($validated);

        return redirect(route('likes.index'));
    }
        public function show(int $likeId) {

        $like = Like::findOrFail($likeId);

        return view('categories-show', ['like'=>$like]);
    }


    public function destroy(int $likeId) {

        $like = Like::findOrFail($likeId);

        $like -> delete();

        return redirect(route('likes.index'));

    }

    public function edit(int $likeId) {
        $like = Like::findOrFail($likeId);
        return view('categories-edit', ['like' => $like]);
        }


    public function update(Request $request, $likeId)
    {
        $title = $request->input('title');

        $like = Like::findOrFail($likeId);

        $like -> update ([
          "title" => $title
        ]);

        return redirect(route('likes.index'));
    }
}
