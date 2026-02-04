@extends('layouts.restaurateur')

@section('header')
    Modifier le restaurant
@endsection

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-3xl shadow-card border border-gray-100">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Informations générales</h2>
        
        <form action="{{ route('restaurants.update', 1) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom du restaurant</label>
                    <input type="text" name="name" id="name" value="Le Petit Bistro" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 shadow-sm" required>
                </div>
                
                <div class="space-y-2">
                    <label for="city" class="block text-sm font-medium text-gray-700">Ville / localisation</label>
                    <input type="text" name="city" id="city" value="Paris" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 shadow-sm" required>
                </div>

                <div class="space-y-2">
                    <label for="cuisine" class="block text-sm font-medium text-gray-700">Type de cuisine</label>
                    <select name="cuisine" id="cuisine" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 shadow-sm bg-white">
                        <option value="italienne">Italienne</option>
                        <option value="francaise" selected>Française</option>
                        <option value="japonaise">Japonaise</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label for="capacity" class="block text-sm font-medium text-gray-700">Capacité</label>
                    <input type="number" name="capacity" id="capacity" min="1" value="80" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 shadow-sm" required>
                </div>
            </div>

            <div class="mt-6 space-y-2">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 shadow-sm">Un charmant petit bistro au cœur de Paris.</textarea>
            </div>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="hours" class="block text-sm font-medium text-gray-700">Horaires</label>
                    <input type="text" name="hours" id="hours" value="Lun-Dim 12:00-23:00" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 shadow-sm">
                </div>
                <div class="space-y-2">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                    <input type="tel" name="phone" id="phone" value="+33 1 23 45 67 89" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 shadow-sm">
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="photos" class="block text-sm font-medium text-gray-700">Photos</label>
                    <input type="file" name="photos[]" id="photos" multiple class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 shadow-sm">
                    <p class="text-xs text-gray-400">Remplacez ou ajoutez des photos.</p>
                </div>
                <div class="space-y-2">
                    <label for="menus" class="block text-sm font-medium text-gray-700">Menus</label>
                    <textarea name="menus" id="menus" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 shadow-sm">Menu Déjeuner, Menu Dégustation</textarea>
                </div>
            </div>

            <div class="mt-8 flex justify-end gap-3">
                <a href="{{ route('restaurants.index') }}" class="px-6 py-3 rounded-lg text-gray-700 hover:bg-gray-100 font-bold transition">Annuler</a>
                <button type="submit" class="bg-brand-500 text-white px-8 py-3 rounded-lg font-bold hover:bg-brand-600 transition shadow-lg shadow-brand-500/20">
                    Mettre à jour
                </button>
            </div>
        </form>
    </div>
@endsection
