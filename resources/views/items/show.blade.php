<!-- resources/views/items/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $item->name }}</h1>
    <p>{{ $item->description }}</p>
    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
