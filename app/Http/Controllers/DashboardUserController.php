<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    { 
        $products = Product::all();
        return view('user.dashboard.index', compact('products'));
    }
}
