<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $list = Car::paginate(3);
        return view('home', [
            "list" => $list,
            
        ]);


    }

    public function products()
    {

        $list = Car::paginate(9);
        return view('products', [
            "list" => $list,
            
        ]);


    }

    public function product($id)
    {

        $product = Car::find($id);
        return view('product', [
            "product" => $product,
            
        ]);


    }
}
