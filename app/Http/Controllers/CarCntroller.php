<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Car;

class CarCntroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        return view('welcome', [
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
      

        $validated = $this->validator($request->all())->validate();
        
        $car =  Car::create($validated);
        return redirect()->route('home')->with('success', 'Carro cadastrado!');
    }

    public function update(Car $car, Request $request){
        // $request->validate([
        //     'plate' => 'required|unique:cars',
        //     'mark' => 'required|string',
        //     'model' => 'required|string',
        //     'price' => 'required|string',
        //     'cor' => 'required|string',
        // ]);

        $car->update($request->all());
        return back()->with('success', 'Carro editado!');
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

    public function validator(array $data){
        return Validator::make($data, [
            'plate' => 'required|unique:cars|max:7|nullable',
            'mark' => 'required|max:50',
            'model' => 'required|max:50',
            'price' => 'required|numeric',
            'release_date' => 'required|date',
        ]);
    }
    

}
