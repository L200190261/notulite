<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotulensiController extends Controller
{
    public function index()
    {
        return view('notulensi', [
            'title' => 'Notulensi',
            'active' => 'notulensi'
        ]);
    }
}
