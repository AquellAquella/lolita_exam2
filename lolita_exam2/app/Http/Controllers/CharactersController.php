<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import model
use App\Models\characters;

class CharactersController extends Controller
{
    public function index() {
        $page_title = "All Characters View";
        $characters = characters::all();
        return view('characters', compact('page_title', 'characters'));
    }

    public function index_above() {
        $page_title = "Characters Above 80 in HP View";
        $char_above = characters::where('hp','>','80') -> get();
        return view('characters_above', compact('page_title', 'char_above'));
    }

    public function index_eb() {
        $page_title = "Characters Equal or Below 80 in HP View";
        $char_eb = characters::where('hp','<=','80') -> get();
        return view('characters_eb', compact('page_title', 'char_eb'));
    }
}
