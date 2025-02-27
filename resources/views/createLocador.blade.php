@extends('layouts.app')

@section('content')
    @if ($locador->id)
        {{-- Se for um livro que já existe --}}
        <form class="w-full max-w-4xl mt-8 m-auto" action="{{ route('locador.update', $locador) }}" method="post">
            @method('PUT')
        @else
            {{-- Se não, quer dizer que estou criando um novo --}}
            <form class="w-full max-w-4xl mt-8 m-auto" action="{{ route('locador.storage') }}" method="post">
                <input
                    class="appearance-none hidden w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="road" value="20" type="number" name="level">
    @endif
    @csrf
    <div class="flex -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="store_name">
                Nome da Loja
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="store_name" type="text" value="{{ old('store_name', $locador->store_name) }}" name="store_name"
                placeholder="CarTop">
            <p class="text-gray-600 text-xs italic">Digite o nome da loja</p>
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                Cidade
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="city" type="text" value="{{ old('city', $locador->city) }}" name="city"
                placeholder="Nova Cruz">
            <p class="text-gray-600 text-xs italic">Digite o nome da sua cidade</p>
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="state">
                Estado
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="state" value="{{ old('state', $locador->state) }}" type="text" placeholder="Rio Grande do Norte"
                name="state">
            <p class="text-gray-600 text-xs italic">Digite seu estado</p>
        </div>


    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="neighborhood">
                Bairro
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="neighborhood" value="{{ old('neighborhood', $locador->neighborhood) }}" type="text"
                placeholder="Frei Damião" name="neighborhood">
            <p class="text-gray-600 text-xs italic">Digite seu bairro</p>
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number">
                Numero
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="number" value="{{ old('number', $locador->number) }}" type="text"
                placeholder="66" name="number">
            <p class="text-gray-600 text-xs italic">Digite o numero residencial</p>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="road">
                Endereço
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="road" value="{{ old('road', $locador->road) }}" type="text" placeholder="Rua joão Menezes"
                name="road">
            <p class="text-gray-600 text-xs italic">Digite seu endereço</p>
        </div>
    </div>


    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cep">
                Cep
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="cep" value="{{ old('cep', $locador->cep) }}" type="text" placeholder="12345-000"
                name="cep">
            <p class="text-gray-600 text-xs italic">Digite seu cep</p>
        </div>

    </div>










    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        Salvar</button>

    {{-- <a href="{{ route('locador.create') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
        Novo</a> --}}
    {{-- <a href="{{ route('list.car') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
        Lista</a> --}}
    </form>

    {{-- @if ($car->id != '')
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">
                {{ __('By') }}</label>

            <div class="col-md-6">
                <input class="form-control" value="{{ $car->user->name }}" disabled>
            </div>
        </div>
    @endif --}}

    @if (session('success'))
        <div class="mb-4 p-3 bg-green-200 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

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
