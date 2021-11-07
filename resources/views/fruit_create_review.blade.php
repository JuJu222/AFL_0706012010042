@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <input type="hidden" name="fruit_id" value="{{ $fruit->fruit_id }}">
        <div class="form-group mt-3">
            <label for="input_project_name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="input_project_description">Score</label>
            <input type="number" name="score" step="1" min="1" max="5" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="input_project_description">Body</label>
            <input type="text" name="body" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="fruit_id_disabled">Fruit</label>
            <select name="fruit_id_disabled" class="form-control" disabled>
                <option value="{{ $fruit->fruit_id }}" selected>{{ $fruit->fruit_name }}</option>
            </select>
        </div>
        <button type="submit" class="btn btn-danger mt-3">Submit</button>
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
