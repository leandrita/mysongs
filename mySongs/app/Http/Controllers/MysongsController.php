<?php

namespace App\Http\Controllers;

use App\Models\Mysong;
use Illuminate\Http\Request;

class MysongsController extends Controller
{
    public function show()
    {

        $mysongs = Mysong::all();

        return view('show', compact('mysongs'));
    }
}
