<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createReview($id)
    {
        $title = 'Fruits';
        $pagetitle = 'Fruits';

        $fruit = Fruit::query()->findOrFail($id);

        return view('fruit_create_review', compact('title', 'pagetitle', 'fruit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fruit_name' => 'required|min:3',
            'price' => 'required',
            'weight' => 'required',
            'image' => 'required'
        ]);

        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $name);

        Fruit::create([
            'fruit_name' => $request->fruit_name,
            'price' => $request->price,
            'weight' => $request->weight,
            'image_path' => $name
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
        $pagetitle = 'Fruit Details';

        $fruit = Fruit::query()->findOrFail($id);

        return view('fruit_show', compact('title', 'pagetitle', 'fruit'));
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
        $this->validate($request, [
            'fruit_name' => 'required|min:3',
            'price' => 'required',
            'weight' => 'required',
            'image' => 'required'
        ]);

        $fruit = Fruit::query()->findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);

            File::delete(public_path('/img') . '/' . $fruit->image_path);

            $fruit->update([
                'fruit_name' => $request->fruit_name,
                'price' => $request->price,
                'weight' => $request->weight,
                'image_path' => $name
            ]);
        } else {
            $fruit->update([
                'fruit_name' => $request->fruit_name,
                'price' => $request->price,
                'weight' => $request->weight
            ]);
        }

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

        File::delete(public_path('/img') . '/' . $fruit->image_path);
        $fruit->delete();

        return redirect(route('fruits.index'));
    }
}
