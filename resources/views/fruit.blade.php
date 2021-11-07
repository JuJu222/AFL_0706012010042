@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
        @foreach ($fruits as $fruit)
            <div class="col">
                <div class="card h-100 shadow-sm border-0 card_fruit">
                    <img src="{{ asset('img/' . $fruit->image_path) }}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $fruit->fruit_name }}</h5>
                        <p class="card-text">Weight: {{ $fruit->weight }} kg</p>
                        <p class="card-text">Rp {{ $fruit->price }}</p>
                    </div>
                    <div class="card-footer border-0">
                        <a href="{{ route('fruits.edit', $fruit->fruit_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('fruits.destroy', $fruit->fruit_id) }}" method="POST" class="delete_button">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    <a href="{{ route('fruits.show', $fruit->fruit_id) }}" class="stretched-link"></a>
                </div>
            </div>
        @endforeach
            <div class="col">
                <a href="{{ route('fruits.create') }}">
                    <div class="card h-100 card_add">
                        <div class="card-body row align-items-center justify-content-center">
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg h-50 w-50 mx-auto my-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                </svg>
                                <h5 class="card-title">Add Fruit</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    </div>
@endsection
