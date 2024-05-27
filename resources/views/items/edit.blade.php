<!-- resources/views/items/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Item</h1>

    <form method="POST" action="{{ route('items.update', $item->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $item->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
