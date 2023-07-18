<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

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
}
