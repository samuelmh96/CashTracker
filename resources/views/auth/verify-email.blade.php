@extends('layouts.auth')

@section('title')
    Registrarse
@endsection

@section('auth-contents')
    <div class="mt-14 space-y-5">
        <p class="mt-5 text-lg text-center text-gray-600">¡Gracias por registrarte! Antes de continuar, ¿podrías verificar tu correo electrónico haciendo clic en el enlace que te enviamos? Si no recibiste el correo electrónico, con gusto te enviaremos otro.</p>
{{--
        @if (session('status') == 'verification-link-sent')
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">¡Listo!</strong>
                <span class="block sm:inline">Se ha enviado un nuevo enlace de verificación a tu correo electrónico.</span>
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div class="flex items-center justify-between mt-4">
                <button type="submit"
                    class="bg-purple-950 hover:bg-purple-800 w-full p-3 rounded-lg text-white font-bold  text-xl cursor-pointer">
                    Reenviar correo de verificación
                </button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="bg-red-500 hover:bg-red-600 w-full p-3 rounded-lg text-white font-bold  text-xl cursor-pointer mt-4">
                Cerrar sesión
            </button>
        </form> --}}
    </div>
@endsection
