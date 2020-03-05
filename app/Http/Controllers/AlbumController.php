<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;


class AlbumController extends Controller

{
    public function index()
    {
        $albums = Album::all();
        return view ("/album/admin", compact("albums"));
    }
    
    public function create()
    {
        return view("/album/create");
    }

    //
}
