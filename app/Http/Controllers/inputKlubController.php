<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inputKlubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('input_klub',[
            'title' => 'Input Klub'
        ]);
    }

}
