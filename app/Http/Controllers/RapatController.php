<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RapatController extends Controller
{
    public function index()
    {
        return view('rapat', [
            'title' => 'Rapat',
            'active' => 'rapat'
        ]);
    }
}
