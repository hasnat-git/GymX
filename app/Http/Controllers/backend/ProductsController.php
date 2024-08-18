<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(session()->has('email')){
            return view('backend.products', ['product'=>Product::get()]);
        } else {
            return redirect()->route('admin.login');
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function addProduct()
    {
        if(session()->has('email')){
            return view('backend.products-add');
        } else {
            return redirect()->route('admin.login');
        }
    }
    public function submitProductRecord(Request $request)
    {
        // dd($request->all());
        if(session()->has('email')){
            $request->validate(
                [
                    'title' => 'required|min:3',
                    'details' => 'required|min:10',
                    'price' => 'required|min:3',
                    'category' => 'required|min:3',
                    'tag' => 'required|min:3',
                    'image' => 'required|mimes:jpeg,jpg,png|max:10000'
                ]);
            $PRODUCT_STATUS = 1;
            $ImageName = 'gym_product_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('backend/images/products'), $ImageName);
            // dd($ImageName);
            $product = new Product();
            $product->title = $request->title;
            $product->details = $request->details;
            $product->price = $request->price;
            $product->category = $request->category;
            $product->tag = $request->tag;
            $product->image = $ImageName;
            $product->status = $PRODUCT_STATUS;
            $product->save();
            return back()->withSuccess('Product Record Added Successfully');
        } else {
            return redirect()->route('admin.login');
        }
    }
    public function editProduct($id)
    {
            // dd($id);
        if(session()->has('email')){
            $product = Product::where('id', $id)->first();
            return view('backend.products-edit', ['product' => $product]);
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function updateProduct(Request $request, $id)
    {
        if(session()->has('email')){
            $request->validate(
                [
                    'title' => 'required|min:3',
                    'details' => 'required|min:10',
                    'price' => 'required|min:3',
                    'category' => 'required|min:3',
                    'tag' => 'required|min:3',
                    'image' => 'nullable|mimes:jpeg,jpg,png|max:10000'
                ]
                );

            $product = Product::where('id', $id)->first();
            $PRODUCT_STATUS = 1;
            if(isset($request->image))
            {
                $ImageName = 'gym_product_' . time() . '.' . $request->image->extension();
                $request->image->move(public_path('backend/images/products'), $ImageName);
                $product->image = $ImageName;
            }
            $product->title = $request->title;
            $product->details = $request->details;
            $product->price = $request->price;
            $product->category = $request->category;
            $product->tag = $request->tag;
            $product->status = $PRODUCT_STATUS;
            $product->save();
            return back()->withSuccess('Product Record Updated Successfully');
        } else {
            return redirect()->route('admin.login');
        }
    }
    public function deleteProduct($id)
    {
        if(session()->has('email')){
            $product = Product::where('id', $id)->first();
            $product->delete();
            return back()->withSuccess('Product Record Deleted Successfully');
        } else {
            return redirect()->route('admin.login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
