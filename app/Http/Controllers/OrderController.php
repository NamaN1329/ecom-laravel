<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index() {
        $orders = Auth::user()->orders()->with('product')->paginate(10);
        return view('orders', ['orders' => $orders]);
    }
}
