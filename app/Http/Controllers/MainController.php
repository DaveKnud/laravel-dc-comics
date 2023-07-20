<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class MainController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comic.index', compact('comics'));
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comic.show', compact('comic'));
    }

    public function create()
    {
        return view('comic.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:2',
            'description' => 'required|max:255',
            'thumb' => 'required|max:255',
            'price' => 'required|integer',
            'series' => 'required|max:255',
            'sale_date' => 'required|max:255',
            'type' => 'nullable|max:255',
        ]);

        $comic = Comic::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'thumb' => $data['thumb'],
            'price' => $data['price'],
            'series' => $data['series'],
            'sale_date' => $data['sale_date'],
            'type' => $data['type']
        ]);


        return redirect()->route("comic.show", $comic->id);
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comic.edit', compact('comic'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|max:2',
            'description' => 'required|max:255',
            'thumb' => 'required|max:255',
            'price' => 'required|integer',
            'series' => 'required|max:255',
            'sale_date' => 'required|max:255',
            'type' => 'nullable|max:255',
        ]);

        $comic = Comic::findOrFail($id);

        $comic->update($data);
        return redirect()->route("comic.show", $comic->id);
    }

    public function delete($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comic.index');
    }
}
