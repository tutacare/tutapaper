<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    function beranda()
    {
      return view('beranda.beranda');
    }
}
