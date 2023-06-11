<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FillInTheBlankController extends Controller
{
    public function index()
    {
        return view('english.fill-in-the-blank');
    }
}
