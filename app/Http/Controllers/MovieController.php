<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
  public function index()
  {
    $title_page = 'Movies';
    $movies = Movie::all();
    return view('movies', compact('movies'))->with('title_page', $title_page);
  }
}
