@extends('layouts.app')

@section('content')
    @if ($car->id)
        {{-- Se for um livro que já existe --}}
        <form class="w-full max-w-4xl mt-8 mb-30 m-auto" action="{{ route('update.car', $car) }}" method="post">
            @method('PUT')
        @else
            {{-- Se não, quer dizer que estou criando um novo --}}
            <form class="w-full max-w-4xl mt-8 mb-30 m-auto" action="{{ route('storage.car') }}" method="post">
    @endif
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="plate">
                Nº Placa do Carro
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="plate" type="text" value="{{ old('plate', $car->plate) }}" name="plate"
                placeholder="EAR1E84">
            <p class="text-gray-600 text-xs italic">Digite o numero da placa.</p>
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="model">
                Modelo
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="model" type="text" value="{{ old('model', $car->model) }}" name="model"
                placeholder="Onix">
            <p class="text-gray-600 text-xs italic">Digite o modelo do carro.</p>
        </div>


    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="mark">
                Marca
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="mark" value="{{ old('mark', $car->mark) }}" type="text" placeholder="Chevrolet"
                name="mark">
            <p class="text-gray-600 text-xs italic">Digite a marca do carro</p>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
                Preço
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="price" value="{{ old('price', $car->price) }}" type="text" placeholder="R$100.00"
                name="price">
            <p class="text-gray-600 text-xs italic">Digite o Preço</p>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="release_date">
                Data de Lançamento
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="release_date" value="{{ old('release_date', $car->release_date) }}" type="text"
                placeholder="29.10.2002" name="release_date">
            <p class="text-gray-600 text-xs italic">Data de Lançamento</p>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        {{-- <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="release_date">
                Data de Lançamento
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="release_date" value="{{ old('release_date', $car->release_date) }}" type="text"
                placeholder="29/10/2002" name="release_date">
            <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
        </div> --}}
        <div class="w-full px-3">
            <label for="description" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descrição</label>
            <textarea id="description" value="{{ old('description', $car->descripition) }}" name="description" rows="4" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Write product description here"></textarea>                    
        </div>
    </div>


    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        Salvar</button>
    
    </form>

    

   

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
