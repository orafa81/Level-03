<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

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
        
        return view('home', [
            "car" => new Car(),
            
        ]);
        
    }
    public function list()
    {
        $list = Car::paginate(3);
        return view('list', [
            "list" => $list,
            
        ]);
        
    }

    public function save(Request $request)
    {
        $car = Car::create($request->all());

        return redirect()->back();
    }

    public function update(Car $car, Request $request){
        $car->update($request->all());
        return back();
    }
    
    
    public function delete(Car $car){
        $car->delete();
        return redirect(route('list'));
    }
    

    public function edit(Car $car)
    {
        $list = car::paginate(3);
        return view("home", [
            'car' => $car,
        ]);
    }

}
