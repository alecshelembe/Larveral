<!-- resources/views/items/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Items</h1>

    <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">Add Item</a>

    @if(count($items) > 0)
        <ul class="list-group">
            @foreach($items as $item)
                <li class="list-group-item">
                    <a href="{{ route('items.show', $item->id) }}">{{ $item->name }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No items found</p>
    @endif
@endsection
