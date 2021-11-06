<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Reviews';
        $pagetitle = 'Reviews';

        $reviews = Review::all();

        return view('review', compact('title', 'pagetitle', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Reviews';
        $pagetitle = 'Reviews';

        $fruits = Fruit::all();

        return view('review_create', compact('title', 'pagetitle', 'fruits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'name' => 'required|unique:courses|min:3',
//            'lecturer' => 'required',
//            'sks' => 'required',
//            'description' => 'required'
//        ]);

//        $imageName = time().'.'.$request->image->getClientOriginalExtension();
//        $request->image->move(public_path('/uploadedimages'), $imageName);

        Review::create([
            'name' => $request->name,
            'score' => $request->score,
            'body' => $request->body,
            'fruit_id' => $request->fruit_id
        ]);

        return redirect(route('reviews.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Reviews';
        $pagetitle = 'Reviews';

        $review = Review::query()->findOrFail($id);

        return view('review_show', compact('title', 'review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Reviews';
        $pagetitle = 'Reviews';

        $review = Review::query()->findOrFail($id);
        $fruits = Fruit::all();

        return view('review_edit', compact('title', 'pagetitle', 'review', 'fruits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review = Review::query()->findOrFail($id);

        $review->update([
            'name' => $request->name,
            'score' => $request->score,
            'body' => $request->body,
            'fruit_id' => $request->fruit_id
        ]);

        return redirect(route('reviews.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect(route('reviews.index'));
    }
}
