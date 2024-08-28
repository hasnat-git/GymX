<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\FrontendShop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        // Fetch products with pagination, showing 12 products per page
        $products = FrontendShop::paginate(8);

        // Pass the paginated products to the view
        return view('frontend.shop', ['products' => $products]);
    }

    // Other methods (create, store, show, edit, update, destroy) as needed
}
