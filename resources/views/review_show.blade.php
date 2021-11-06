@extends('layout.mainlayout')

@section('title', 'Fruits')
@section('page_title', 'Fruit Details')

@section('main_content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>{{ $review->name }}</h1>
        <p>Score: {{ $review->score }}</p>
        <p>Body: {{ $review->body }}</p>
        <p>Fruit: {{ $review->fruit->fruit_name }}</p>
    </div>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Score</th>
            <th>Body</th>
            <th>Fruit</th>
        </tr>
{{--        @foreach ($fruit->reviews as $review)--}}
{{--            <tr>--}}
{{--                <td>{{ $loop->index + 1 }}</td>--}}
{{--                <td>{{ $review['name'] }}</td>--}}
{{--                <td>{{ $review['score'] }}</td>--}}
{{--                <td>{{ $review['body'] }}</td>--}}
{{--                <td>{{ $review->fruit->fruit_name }}</td>--}}
{{--                --}}{{--                <td>--}}
{{--                --}}{{--                    <a href="{{ route('fruits.show', $fruit['code']) }}" class="btn btn-primary">Show</a>--}}
{{--                --}}{{--                    <a href="{{ route('fruits.edit', $fruit['id']) }}" class="btn btn-warning">Edit</a>--}}
{{--                --}}{{--                    <form action="{{ route('fruits.destroy', $fruit['id']) }}" method="POST">--}}
{{--                --}}{{--                        @csrf--}}
{{--                --}}{{--                        @method('DELETE')--}}
{{--                --}}{{--                        <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                --}}{{--                    </form>--}}
{{--                --}}{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
    </table>
@endsection
