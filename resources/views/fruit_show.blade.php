@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <div class="card mb-3 w-100 border-0">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('img/' . $fruit->image_path) }}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $fruit->fruit_name }}</h2>
                    <p class="card-text">Weight: {{ $fruit->weight }} kg</p>
                    <p class="card-text">Rp {{ $fruit->price }}</p>
                    <div>
                        <a href="{{ route('fruits.edit', $fruit->fruit_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('fruits.destroy', $fruit->fruit_id) }}" method="POST" class="delete_button">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>Reviews</h2>
    <a href="{{ $fruit->fruit_id . '/create_review' }}" class="btn btn-danger mt-3 mb-3">Add Review</a>
    @foreach ($fruit->reviews as $review)
        <div class="card mt-3 border-0 shadow-sm">
            <div class="card-body p-4">
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
                    <span>{{ $review->body }}</span>
                </div>
            </div>
            <a href="{{ route('reviews.show', $review->review_id) }}" class="stretched-link"></a>
        </div>
    @endforeach
@endsection
