@extends('layouts.auth')

@section('title')
    Administra tus Presupuestos y Gastos
@endsection

@section('auth-contents')
    <h1 class="text-3xl font-bold text-center mb-0">Bienvenido a CashTracker</h1>
    <p class="mt-5 text-lg text-center text-gray-600">Administra tus presupuestos y gastos de manera eficiente y sencilla. ¡Comienza a organizar tus finanzas hoy mismo!</p>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">¡Éxito! </strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
@endsection
