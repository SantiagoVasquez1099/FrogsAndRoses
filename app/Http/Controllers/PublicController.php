<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Product;

class PublicController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('public.index');
    }

    public function nous()
    {
        return view('public.nous');
    }

    public function menu()
    {
        return view('public.menu');
    }

    public function tapas()
    {
        return view('public.tapas');
    }

    public function images()
    {
        $images = Gallery::all();
        return view('public.images', compact('images'));
    }

    public function shop()
    {
        $products = Product::all();
        return view('public.shop', compact('products'));
    }

    public function contact()
    {
        return view('public.contact');
    }
}
