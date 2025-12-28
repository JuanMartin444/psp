<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50">
        <div class="min-h-screen flex flex-col items-center justify-center px-4">
            <div class="max-w-2xl w-full text-center">
                <!-- Logo o título de la aplicación -->
                <div class="mb-8">
                    <h1 class="text-5xl font-bold text-gray-900 mb-4">
                        Bienvenido a PSP - Sistema de Gestión
                    </h1>
                    <p class="text-xl text-gray-600">
                        Tu plataforma de gestión y productividad
                    </p>
                </div>

                <!-- Descripción -->
                <div class="mb-12 bg-white rounded-lg shadow-sm p-8">
                    <p class="text-gray-700 leading-relaxed">
                        Accede a tu cuenta para comenzar a gestionar tus proyectos,
                        seguir tu progreso y colaborar con tu equipo de manera eficiente.
                    </p>
                </div>

                <!-- Botones de acción -->
                <div class="space-y-4">
                    @auth
                        <!-- Si ya está autenticado, mostrar botón al dashboard -->
                        <a href="{{ url('/dashboard') }}"
                           class="inline-block w-full sm:w-auto px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg transition duration-150 ease-in-out">
                            Ir al Dashboard
                        </a>
                    @else
                        <!-- Botones de login y registro -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('login') }}"
                               class="inline-block px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg transition duration-150 ease-in-out">
                                Iniciar Sesión
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="inline-block px-8 py-4 bg-white hover:bg-gray-50 text-indigo-600 font-semibold rounded-lg shadow-lg border-2 border-indigo-600 transition duration-150 ease-in-out">
                                    Registrarse
                                </a>
                            @endif
                        </div>
                    @endauth
                </div>

                <!-- Información adicional -->
                <div class="mt-16 grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="text-indigo-600 text-3xl mb-2">🚀</div>
                        <h3 class="font-semibold text-gray-900 mb-2">Rápido</h3>
                        <p class="text-sm text-gray-600">Acceso inmediato a tus proyectos</p>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="text-indigo-600 text-3xl mb-2">🔒</div>
                        <h3 class="font-semibold text-gray-900 mb-2">Seguro</h3>
                        <p class="text-sm text-gray-600">Tus datos protegidos siempre</p>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="text-indigo-600 text-3xl mb-2">📊</div>
                        <h3 class="font-semibold text-gray-900 mb-2">Eficiente</h3>
                        <p class="text-sm text-gray-600">Gestiona todo desde un solo lugar</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
