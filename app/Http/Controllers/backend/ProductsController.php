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
        // Assume middleware handles authentication
        $product=Product::get();
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('product', 'FullName');
        return view('backend.products')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addProduct()
    {
        // Assume middleware handles authentication
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('FullName');



        return view('backend.products-add')->with($data);
    }

    public function submitProductRecord(Request $request)
    {
        // Assume middleware handles authentication
        $request->validate(
            [
                'title' => 'required|min:3',
                'details' => 'required|min:10',
                'price' => 'required|min:3',
                'category' => 'required|min:3',
                'tag' => 'required|min:3',
                'image' => 'required|mimes:jpeg,jpg,png|max:10000'
            ]
        );

        $PRODUCT_STATUS = 1;
        $ImageName = 'gym_product_' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('backend/images/products'), $ImageName);

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
    }

    public function editProduct($id)
    {
        // Assume middleware handles authentication
        $product = Product::where('id', $id)->first();
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('product', 'FullName');
        return view('backend.products-edit')->with($data);
    }

    public function updateProduct(Request $request, $id)
    {
        // Assume middleware handles authentication
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

        if (isset($request->image)) {
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
    }

    public function deleteProduct($id)
    {
        // Assume middleware handles authentication
        $product = Product::where('id', $id)->first();
        $product->delete();

        return back()->withSuccess('Product Record Deleted Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */

}
