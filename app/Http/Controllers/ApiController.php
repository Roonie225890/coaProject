<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ApiController extends Controller
{

    public function index()
    {
      $data = Product::all();

      return $data;
    }

    public function show($id)
    {
      $data = Product::find($id);

      return $data;
    }
}
