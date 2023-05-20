<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ViewProductData;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $count_product = Product::all()->count('*');
        $count_cate = Category::all()->count('*');
        $products = Product::all();
        $order_details = OrderDetail::all();
        return view('admin.dashboard.dashboard',[
            'count_cate' => $count_cate,
            'count_product' => $count_product,
            'products' => $products,
            'order_details' => $order_details
        ]);
    }

    public function productSales(Request $request)
    {
        $products = ViewProductData::selectRaw('product_id, quantity_sell')->where('quantity_sell','<>', null)->get();
        return response()->json($products);
    }
}
