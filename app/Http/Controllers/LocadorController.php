<?php

namespace App\Http\Controllers;

use App\Models\Locador;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LocadorController extends Controller
{

    public function create()
    {

        return view('createLocador', [
            "locador" => new Locador(),
            ""
        ]);
    }

    // public function list()
    // {
    //     $list = User::paginate(3);
    //     return view('list', [
    //         "list" => $list,

    //     ]);

    // }

    public function storage(Request $request)
    {


        $validated = $this->validator($request->all())->validate();

        $validated["user_id"] = Auth::user()->id;

        $user = User::find(Auth::user()->id);  // Encontrar o usuário pelo ID
        $user->level = $request->input('level');   // Atribuir um novo valor à coluna status
        $user->save();

        $locador = Locador::create($validated);
        return redirect()->route('home')->with('success', 'Cadastro concluido!');
    }

    public function update(Locador $locador, Request $request)
    {
        // $request->validate([
        //     'plate' => 'required|unique:cars',
        //     'mark' => 'required|string',
        //     'model' => 'required|string',
        //     'price' => 'required|string',
        //     'cor' => 'required|string',
        // ]);
        $validated = $this->validator($request->all())->validate();

        $validated["user_id"] = Auth::user()->id;

        $locador->update($validated);
        return back()->with('success', 'Conta editada!');
    }


    public function destroy(locador $locador)
    {
        $locador->delete();
        return redirect(route('list.car'));
    }


    public function edit(Locador $locador)
    {
        return view("createCar", [
            'locador' => $locador,
        ]);
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'store_name' => 'required|unique:locadors| max:50',
            'city' => 'required|max:50',
            'cep' => 'required|max:8',
            'road' => 'required|max:50',
            'neighborhood' => 'required|max:50',
            'state' => 'required|max:50',
            'number' => 'required|max:10',
        ]);
    }
}
