@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-md mx-auto bg-blue-50 shadow-lg rounded-lg p-6">
                <h2 class="text-3xl font-bold text-blue-800 mb-6 text-center">Créer un compte</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="first_name" class="block text-blue-700">Prénom</label>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                            placeholder="Entrez votre prénom"
                            class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('first_name') border-red-500 @enderror">
                        @error('first_name')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>


                    
                    <div class="mb-4">
                        <label for="last_name" class="block text-blue-700">Nom de famille</label>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                            placeholder="Entrez votre nom de famille"
                            class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('last_name') border-red-500 @enderror">
                        @error('last_name')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-blue-700">Adresse e-mail</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="Entrez votre e-mail"
                            class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                        @error('email')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-blue-700">Mot de passe</label>
                        <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe"
                            class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror">
                        @error('password')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-blue-700">Confirmer le mot de passe</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" 
                            placeholder="Confirmez votre mot de passe"
                            class="w-full px-4 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <button type="submit"
                        class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">
                        S'inscrire
                    </button>

                    <p class="mt-4 text-center text-gray-600">
                        Vous avez déjà un compte ? <a href="{{ route('login.form') }}" class="text-blue-500 hover:underline">Connectez-vous ici</a>.
                    </p>
                </form>
            </div>
        </div>
    </section>
@endsection