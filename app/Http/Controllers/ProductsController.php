<?php

namespace App\Http\Controllers;

use App\Product;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {

       if( Auth::check() ){
            $products = Product::latest()->paginate(15);
            // $projects = Project::All();

            return view('products.index')->with('products', $products);
        }
        return view('auth.login');

     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Auth::check()){
          $product = Product::create([
              'name' => $request->input('name'),
              'feature' => $request->input('feature'),
              'sale_place' => $request->input('sale_place'),
              'produce_org' => $request->input('produce_org'),
              'spec_and_price' => $request->input('spec_and_price'),
              'contact_tel' => $request->input('contact_tel'),
              'img' => $request->input('img'),
              'user_id' => Auth::user()->id
          ]);


          if($product){
              return redirect()->route('products.show', ['product'=> $product->id])
              ->with('success' , 'product created successfully');
          }

      }

          return back()->withInput()->with('errors', 'Error creating new product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::find($product->id);
        DB::table('products')->where('id',$product->id)->increment('view_count');
        $comments = $product->comments;

        return view('products.show',['product'=>$product,'comments'=> $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        if (Auth::user()->role == 1|| $product->user_id == Auth::user()->id) {
          $product = Product::find($product->id);

          return view('products.edit',['product'=>$product]);
      } else {

        return back()->with('errors','Permission denied');

      }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      $productUpdate = Product::where('id', $product->id)
                              ->update([
                                'name' => $request->input('name'),
                                'feature' => $request->input('feature'),
                                'sale_place' => $request->input('sale_place'),
                                'produce_org' => $request->input('produce_org'),
                                'spec_and_price' => $request->input('spec_and_price'),
                                'contact_tel' => $request->input('contact_tel'),
                                'img' => $request->input('img'),
                              ]);

      if($productUpdate){
          return redirect()->route('products.show', ['product'=> $product->id])
          ->with('success' , 'Product updated successfully');
      }
      //redirect
      return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
    //       $findProduct = Product::find( $product->id);
    // if($findProduct->delete()){
    //
    //         //redirect
    //         return redirect()->route('products.index')
    //         ->with('success' , 'Product deleted successfully'.$product->id);
    //     }
    //
    //     return back()->withInput()->with('error' , 'Product could not be deleted');
    $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
