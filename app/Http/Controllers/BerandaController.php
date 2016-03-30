<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use DB;

class BerandaController extends Controller
{
    function beranda()
    {
      $post = Post::orderBy(DB::raw('RAND()'))->take(3)->get();
      return view('beranda.beranda', ['post' => $post]);
    }
}
