<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use Illuminate\Http\Request;

class AluguelController extends Controller
{
    public function store(Request $request)
    {
        // Verifica se o carro já está alugado
        if (Aluguel::where('car_id', $request->car_id)->whereNull('data_fim')->exists()) {
            return redirect()->route('products')->with('fail', 'O carro que você escolheu ja está alugado');
        }

        $aluguel = Aluguel::create([
            'cliente_id' => auth()->user()->cliente->id,
            'car_id' => $request->car_id,
            'data_inicio' => now(),
        ]);

        return redirect()->route('products')->with('success', 'Aluguel confirmado!');
    }
}
