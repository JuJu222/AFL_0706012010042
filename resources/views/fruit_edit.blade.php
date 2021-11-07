@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <form action="{{ route('fruits.update', $fruit->fruit_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mt-3">
            <label for="fruit_name">Fruit name</label>
            <input type="text" name="fruit_name" class="form-control" value="{{ $fruit->fruit_name }}">
        </div>
        <div class="form-group mt-3">
            <label for="price">Price (Rp)</label>
            <input type="number" name="price" class="form-control" value="{{ $fruit->price }}">
        </div>
        <div class="form-group mt-3">
            <label for="weight">Weight (kg)</label>
            <input type="number" name="weight" step="0.01" min="0" class="form-control" value="{{ $fruit->weight }}">
        </div>
        <div class="form-group mt-3">
            <label for="image">Current Image</label>
            <div>
                <img src="{{ asset('img/' . $fruit->image_path) }}" class="w-25 h-25">
            </div>
            <input type="file" name="image" class="form-control mt-2">
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
