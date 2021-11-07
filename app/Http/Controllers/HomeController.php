<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $title = 'Home';
        $pagetitle = 'Welcome!';

        $fruits = Fruit::query()->orderBy('updated_at', 'DESC')->take(3)->get();
        $reviews = Review::query()->orderBy('updated_at', 'DESC')->take(3)->get();

        return view('home', compact('title', 'pagetitle', 'fruits', 'reviews'));
    }
}
