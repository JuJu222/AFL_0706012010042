@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Score</th>
            <th>Body</th>
            <th>Fruit</th>
            <th></th>
        </tr>
        @foreach ($reviews as $review)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $review['name'] }}</td>
                <td>{{ $review['score'] }}</td>
                <td>{{ $review['body'] }}</td>
                <td>
                    <a href="{{ route('fruits.show', $review->fruit->fruit_id) }}">{{ $review->fruit->fruit_name }}</a>
                </td>
                <td>
                    <a href="{{ route('reviews.show', $review->review_id) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('reviews.edit', $review->review_id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('reviews.destroy', $review->review_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
        @endforeach
    </table>
    <a href="{{ route('reviews.create') }}" class="btn btn-primary mt-3 mb-5">Add Review</a>
@endsection
