<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UseController extends Controller
{
   public function photo()
   {
    Storage::put('public/file.jpg', photo);
   }


}