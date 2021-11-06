@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="input_project_name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="input_project_description">Score</label>
            <input type="number" name="score" class="form-control">
        </div>
        <div class="form-group">
            <label for="input_project_description">Body</label>
            <input type="text" name="body" class="form-control">
        </div>
        <div class="form-group">
            <label for="fruit_id">Fruit</label>
            <select name="fruit_id" class="form-control">
                @foreach($fruits as $fruit)
                    <option value="{{ $fruit->fruit_id }}">{{ $fruit->fruit_name }}</option>
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
