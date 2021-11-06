@extends('layout.mainlayout')

@section('title', $title)
@section('page_title', $pagetitle)

@section('main_content')
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Weight</th>
            <th>Image</th>
            <th></th>
        </tr>
        @foreach ($fruits as $fruit)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>
                    <a href="{{ route('fruits.show', $fruit->fruit_id) }}">{{ $fruit->fruit_name }}</a>
                </td>
                <td>{{ $fruit->price }}</td>
                <td>{{ $fruit->weight }}</td>
                <td><img src="{{ asset('img/' . $fruit->image_path) }}" alt=""></td>
                <td>
                    <a href="{{ route('fruits.show', $fruit->fruit_id) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('fruits.edit', $fruit->fruit_id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('fruits.destroy', $fruit->fruit_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('fruits.create') }}" class="btn btn-primary mt-3 mb-5">Add Fruit</a>
@endsection
