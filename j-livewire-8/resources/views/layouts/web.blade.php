<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Curso de programacion web</title>
    <!--vincular archivo de estilos propios de ralavel-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- seccion del header-->
    <header class="shadow-lg">
        <!--linea azul-->
        <div class="bg-blue-900 py-1"></div>
        <nav class="bg-blue-800 py-2">
            <a href="{{ route('home') }}">
                <img
                src="{{ asset('images/isotipo-platzi.png') }}"
                class="h-8 mx-auto">
            </a>
        </nav>
    </header>
    <!-- contenido -->
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <!-- seccion footer-->
    <footer class="py-4 text-center">
        <!-- si esta logiado-->
        @auth
            <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">
                Dashboard
            </a>
        <!-- si no esta logiado-->
        @else
        <a href="{{  url('login') }}" class="text-sm text-gray-700 underline">
            Login
        </a>
        <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 underline">
            Register
        </a>
        @endif
    </footer>
</body>
</html>
