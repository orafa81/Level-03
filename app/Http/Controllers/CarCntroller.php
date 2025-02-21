<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Car;

class CarCntroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('createCar', [
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

    public function storage(Request $request)
    {
      

        $validated = $this->validator($request->all())->validate();
        #Pega a id do usuario que está logado
        $validated["user_id"] = Auth::user()->id;

        $car =  Car::create($validated);
        return redirect()->route('create.car')->with('success', 'Carro cadastrado!');
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
    
    
    public function destroy(Car $car){
        $car->delete();
        return redirect(route('list.car'));
    }
    

    public function edit(Car $car)
    {
        $list = car::paginate(3);
        return view("createCar", [
            'car' => $car,
        ]);
    }

    public function validator(array $data){
        return Validator::make($data, [
            'plate' => 'required|unique:cars|max:7|nullable',
            'mark' => 'required|max:50',
            'model' => 'required|max:50',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'release_date' => 'required|date',
        ]);
    }
    

}
