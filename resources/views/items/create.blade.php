<!-- resources/views/items/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Item</h1>

    <form method="POST" action="{{ route('items.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
