<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ApiController extends Controller
{

  public function index()
  {

    return view('api');

  }

    public function getAll()
    {
      $data = Product::all();

      return $data;
    }

    public function getOne($id)
    {
      $data = Product::find($id);

      return $data;
    }
}
