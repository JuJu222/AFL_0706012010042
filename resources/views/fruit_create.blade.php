@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <form action="{{ route('fruits.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-3">
            <label for="fruit_name">Fruit name</label>
            <input type="text" name="fruit_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="price">Price (Rp)</label>
            <input type="number" name="price" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="weight">Weight (kg)</label>
            <input type="number" name="weight" step="0.01" min="0" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
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
