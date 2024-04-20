<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductBuyRequest;
use App\Models\Order;
use App\Models\Product;
use App\OrderStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('image')->paginate(20);
        return view('products', ['products' => $products]);
    }

    public function show(Product $product)
    {
        return view('product', ['product' => $product]);
    }

    public function buy(ProductBuyRequest $request, Product $product)
    {
        $productPrice = $product->price;
        $quantity = $request->quantity;

        $totalPrice = $productPrice * $quantity;
        $user = Auth::user();
        Order::create([
            'product_id' => $product->id,
            'buyer_id' => $user->id,
            'quantity' => $quantity,
            'total_price' => $totalPrice,
            'status' => OrderStatus::Success,
            'address' => "Test address"
        ]);

        return redirect('/orders');
    }
}
