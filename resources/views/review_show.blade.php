@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <div class="card mt-5 border-0 shadow-sm">
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
                <span>{{ $review->body }}</span>
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
    </div>
    <a href="{{ route('fruits.show', $review->fruit->fruit_id) }}" class="btn btn-danger mt-3 mb-3">Go to the fruit page</a>
@endsection
