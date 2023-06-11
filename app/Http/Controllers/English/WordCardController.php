<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WordCardController extends Controller
{
    public function index()
    {
        return view('english.word-card');
    }
}
