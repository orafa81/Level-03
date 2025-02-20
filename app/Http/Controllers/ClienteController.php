<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{


    public function create()
    {
        return view('createUser', [
            "cliente" => new Cliente(),
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
        #Pega a id do usuario que está logado
        $validated["user_id"] = Auth::user()->id;

        $cliente = Cliente::create($validated);
        return redirect()->route('home')->with('success', 'Cadastro concluido!');
    }

    public function update(Cliente $cliente, Request $request)
    {
        // $request->validate([
        //     'plate' => 'required|unique:cars',
        //     'mark' => 'required|string',
        //     'model' => 'required|string',
        //     'price' => 'required|string',
        //     'cor' => 'required|string',
        // ]);

        $cliente->update($request->all());
        return back()->with('success', 'Conta editada!');
    }


    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect(route('list.car'));
    }


    public function edit(Cliente $cliente)
    {
        return view("createCar", [
            'cliente' => $cliente,
        ]);
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'cpf' => 'required|unique:clientes| max:14',
            'city' => 'required|max:50',
            'cep' => 'required|max:8',
            'road' => 'required|max:50',
            'neighborhood' => 'required|max:50',
            'state' => 'required|max:50',
            'number' => 'required|max:10',
            'date_of_birth' => 'required|date',
        ]);
    }
}
