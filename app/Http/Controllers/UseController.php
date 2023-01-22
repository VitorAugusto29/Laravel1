<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UseController extends Controller
{
    public function blade()
    {
   
    $name = 'João';

    return view('hello', compact('name'));
    }
}
