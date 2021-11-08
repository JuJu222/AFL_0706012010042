@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', '')

@section('main_content')
    <div class="jumbotron">
        <div class="row">
            <div class="col-7">
                <h1 class="mb-5">Welcome to Frootie!</h1>
                <div class="carousel slide carousel-fade my-4" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1 class="display-4">The Best Fruits In Town!</h1>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-4">Daily Picked Just For You!</h1>
                        </div>
                        <div class="carousel-item">
                            <h1 class="display-4">Try Out Our New Fresh Fruits!</h1>
                        </div>
                    </div>
                </div>
                <p>Check out our latest fruits and reviews below.</p>
            </div>
            <div class="col">
                <img src="{{ asset('img/fruits.png') }}" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
    <h3 class="mt-5">Latest fruits</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        @foreach ($fruits as $fruit)
            <div class="col">
                <div class="card h-100 shadow-sm border-0 card_fruit">
                    <img src="{{ asset('img/' . $fruit->image_path) }}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $fruit->fruit_name }}</h5>
                        <p class="card-text">Weight: {{ $fruit->weight }}</p>
                        <p class="card-text">Rp {{ $fruit->price }}</p>
                    </div>
                    <div class="card-footer border-0">
                        <a href="{{ route('fruits.edit', $fruit->fruit_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('fruits.destroy', $fruit->fruit_id) }}" method="POST" class="delete_button">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    <a href="{{ route('fruits.show', $fruit->fruit_id) }}" class="stretched-link"></a>
                </div>
            </div>
        @endforeach
    </div>
    <h3 class="mt-5">Latest reviews</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        @foreach ($reviews as $review)
            <div class="col">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>{{ $review->fruit->fruit_name }}</h3>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <span class="font-weight-bold text-primary">{{ $review->name }}</span>
                            </div>
                            <small>{{ $review->updated_at->format('d M y | H:i') }}</small>
                        </div>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <span>Score: {{ $review->score }}/5</span>
                        </div>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <span class="review_body">{{ $review->body }}</span>
                        </div>
                    </div>
                    <div class="card-footer border-0">
                        <a href="{{ route('reviews.edit', $review->review_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('reviews.destroy', $review->review_id) }}" method="POST" class="delete_button">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    <a href="{{ route('reviews.show', $review->review_id) }}" class="stretched-link"></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
