<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', ['items' => $items]);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $item = new Item();
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->save();

        return redirect('/items');
    }

    public function show(Item $item)
    {
        return view('items.show', ['item' => $item]);
    }

    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item]);
    }

    public function update(Request $request, Item $item)
    {
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->save();

        return redirect('/items/' . $item->id);
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect('/items');
    }
}
