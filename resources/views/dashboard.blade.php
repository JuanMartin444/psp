<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Mensaje de bienvenida -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-2">
                        ¡Bienvenido, {{ Auth::user()->name }}!
                    </h3>
                    <p class="text-gray-600">
                        Estás conectado correctamente. Desde aquí puedes gestionar tu cuenta y acceder a todas las funcionalidades.
                    </p>
                </div>
            </div>

            <!-- Información del usuario -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <!-- Card 1: Información de cuenta -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="rounded-full bg-indigo-100 p-3">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Tu Cuenta</h4>
                        <p class="text-sm text-gray-600 mb-1">
                            <span class="font-medium">Email:</span> {{ Auth::user()->email }}
                        </p>
                        <p class="text-sm text-gray-600">
                            <span class="font-medium">Miembro desde:</span> {{ Auth::user()->created_at->format('d/m/Y') }}
                        </p>
                    </div>
                </div>

                <!-- Card 2: Estadísticas -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="rounded-full bg-green-100 p-3">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Actividad</h4>
                        <p class="text-sm text-gray-600 mb-1">
                            <span class="font-medium">Proyectos:</span> 0
                        </p>
                        <p class="text-sm text-gray-600">
                            <span class="font-medium">Tareas completadas:</span> 0
                        </p>
                    </div>
                </div>

                <!-- Card 3: Acciones rápidas -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="rounded-full bg-blue-100 p-3">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-4">Acciones Rápidas</h4>
                        <div class="space-y-2">
                            <a href="{{ route('profile.edit') }}" class="block text-sm text-indigo-600 hover:text-indigo-800 transition">
                                → Editar perfil
                            </a>
                            <a href="#" class="block text-sm text-gray-500 hover:text-gray-700 transition">
                                → Nuevo proyecto
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección de contenido adicional -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h4 class="font-semibold text-gray-900 mb-4">Actividad Reciente</h4>
                    <div class="text-center py-8 text-gray-500">
                        <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <p>No hay actividad reciente</p>
                        <p class="text-sm mt-2">Comienza creando tu primer proyecto</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
