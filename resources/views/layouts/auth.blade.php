@extends('layouts.base')

@section('contents')

    <main class="max-w-2xl mt-5 mx-auto p-10 shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold text-center mb-0">@yield('title')</h1>
            @yield('auth-contents')
    </main>
@endsection
