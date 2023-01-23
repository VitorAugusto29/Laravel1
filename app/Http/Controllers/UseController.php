<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UseController extends Controller
{
    public function clients()
    {

    $names = ['Joao', 'Maria'];

    return view ('clients', compact('names'));
    }

}