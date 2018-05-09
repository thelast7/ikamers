<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::paginate(1);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = New Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location, $filename);
            $product->image = $filename;
        }
        $product->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.product.edit', compact('products'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location, $filename);
            $oldImage = $products->imsgr;
            \storage::delete($oldImage);
            $product->image = $filename;
        }
        $product->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
