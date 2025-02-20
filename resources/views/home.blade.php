@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="mb-4 p-3 bg-green-200 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif
@endsection
