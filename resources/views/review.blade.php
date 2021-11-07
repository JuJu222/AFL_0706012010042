@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
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
        <div class="col">
            <a href="{{ route('reviews.create') }}">
                <div class="card h-100 card_add">
                    <div class="card-body row align-items-center justify-content-center">
                        <div class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg h-25 w-25 mx-auto my-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                            </svg>
                            <h5 class="card-title">Add Review</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
