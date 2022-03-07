<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        $stocks = DB::table('t_stocks')
        ->select('product_id', DB::raw('sum(quantity) as quantity'))
        ->groupBy('product_id')
        ->having('quantity', '>', 1);

        $products = DB::table('products')
        ->joinSub($stocks, 'stock', function($join){
            $join->on('products.id', '=', 'stock.product_id');
        })
        ->join('shops', 'products.shop_id', '=', 'shops.id')
        ->join('secondary_categories', 'products.secondary_category_id', '=', 'secondary_categories.id')
        ->where('shops.is_selling', true)
        ->where('products.is_selling', true)
        ->select('products.id as id', 'products.name as name', 'products.price','products.sort_order as sort_order', 'products.information', 'secondary_categories.name as category')
        ->get();

        return view('user.index', compact('stocks', 'products'));
    }
}
