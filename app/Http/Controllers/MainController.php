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
}
