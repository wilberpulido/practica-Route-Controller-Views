<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest as Request;
// use Illuminate\Http\Request; Cambiamos este Request para poder validar

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    public function store (Request $request)
    {
        dd($request->all());
    }
}
