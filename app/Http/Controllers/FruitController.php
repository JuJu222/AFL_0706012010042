<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Fruits';
        $pagetitle = 'Fruits';

        $fruits = Fruit::all();

        return view('fruit', compact('title', 'pagetitle', 'fruits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Fruits';
        $pagetitle = 'Fruits';

        return view('fruit_create', compact('title', 'pagetitle'));
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

        Fruit::create([
            'fruit_name' => $request->fruit_name,
            'price' => $request->price,
            'weight' => $request->weight,
            'image_path' => ''
        ]);

        return redirect(route('fruits.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Fruits';
        $pagetitle = 'Fruits';

        $fruit = Fruit::query()->findOrFail($id);

        return view('fruit_show', compact('title', 'fruit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Fruits';
        $pagetitle = 'Fruits';

        $fruit = Fruit::query()->findOrFail($id);

        return view('fruit_edit', compact('title', 'pagetitle', 'fruit'));
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
        $fruit = Fruit::query()->findOrFail($id);

        $fruit->update([
            'fruit_name' => $request->fruit_name,
            'price' => $request->price,
            'weight' => $request->weight,
            'image_path' => ''
        ]);

        return redirect(route('fruits.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fruit = Fruit::findOrFail($id);
        $fruit->delete();

        return redirect(route('fruits.index'));
    }
}
