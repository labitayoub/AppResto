@extends('layouts.auth')

@section('content')
<div class="relative min-h-screen bg-gray-100">
    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Bienvenue sur AppSchool</h2>
            <p class="text-xl text-gray-600 mb-10">La plateforme de gestion scolaire moderne et intuitive</p>
            
            <div class="flex justify-center">
                @guest
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition mr-4">
                        Commencer maintenant
                    </a>
                    <a href="#features" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition">
                        En savoir plus
                    </a>
                @else
                    <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Accéder à mon espace
                    </a>
                @endguest
            </div>
        </div>

        <!-- Features Section -->
        <div id="features" class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="h-6 w-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Facile à utiliser</h3>
                <p class="text-gray-600">Interface intuitive conçue pour faciliter la gestion scolaire quotidienne.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Sécurisé</h3>
                <p class="text-gray-600">Vos données sont protégées avec les dernières technologies de sécurité.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="h-12 w-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="h-6 w-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Rapide</h3>
                <p class="text-gray-600">Performance optimale pour une expérience utilisateur fluide et agréable.</p>
            </div>
        </div>
    </main>
</div>
@endsection

@section('head')
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
@endsection
