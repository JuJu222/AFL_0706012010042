@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <form action="{{ route('reviews.update', $review->review_id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label for="input_project_name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $review->name }}">
        </div>
        <div class="form-group">
            <label for="input_project_description">Score</label>
            <input type="number" name="score" class="form-control" value="{{ $review->score }}">
        </div>
        <div class="form-group">
            <label for="input_project_description">Body</label>
            <input type="text" name="body" class="form-control" value="{{ $review->body }}">
        </div>
        <div class="form-group">
            <label for="fruit_id">Fruit</label>
            <select name="fruit_id" class="form-control">
                @foreach($fruits as $fruit)
                    @if ($review->fruit_id == $fruit->fruit_id)
                        <option value="{{ $fruit->fruit_id }}" selected>{{ $fruit->fruit_name }}</option>
                    @else
                        <option value="{{ $fruit->fruit_id }}">{{ $fruit->fruit_name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
