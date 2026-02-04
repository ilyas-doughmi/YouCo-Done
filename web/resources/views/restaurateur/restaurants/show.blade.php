@extends('layouts.restaurateur')

@section('header')
    Détails du restaurant
@endsection

@section('content')
    <div class="py-8 space-y-6">
        <div class="flex flex-col lg:flex-row gap-6">
            <div class="flex-1 bg-white rounded-3xl shadow-card p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Le Petit Bistro</h2>
                        <p class="text-sm text-gray-500">Paris · Cuisine Française</p>
                    </div>
                    <span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-xs font-bold border border-emerald-200">Actif</span>
                </div>

                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="rounded-2xl bg-gray-50 p-4">
                        <p class="text-xs uppercase text-gray-400">Capacité</p>
                        <p class="mt-2 text-lg font-semibold text-gray-900">80 couverts</p>
                    </div>
                    <div class="rounded-2xl bg-gray-50 p-4">
                        <p class="text-xs uppercase text-gray-400">Horaires</p>
                        <p class="mt-2 text-lg font-semibold text-gray-900">12:00 - 23:00</p>
                    </div>
                    <div class="rounded-2xl bg-gray-50 p-4">
                        <p class="text-xs uppercase text-gray-400">Téléphone</p>
                        <p class="mt-2 text-lg font-semibold text-gray-900">+33 1 23 45 67 89</p>
                    </div>
                </div>

                <div class="mt-6">
                    <p class="text-sm text-gray-500">Description</p>
                    <p class="mt-2 text-gray-800">Un charmant petit bistro au cœur de Paris, idéal pour vos déjeuners d'affaires et dîners romantiques.</p>
                </div>

                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('restaurants.edit', 1) }}" class="px-5 py-2 rounded-lg bg-brand-500 text-white text-sm font-semibold hover:bg-brand-600">Modifier</a>
                    <button class="px-5 py-2 rounded-lg bg-red-50 text-red-600 text-sm font-semibold hover:bg-red-100">Supprimer</button>
                    <a href="{{ route('restaurants.index') }}" class="px-5 py-2 rounded-lg bg-gray-100 text-gray-700 text-sm font-semibold hover:bg-gray-200">Retour</a>
                </div>
            </div>

            <div class="w-full lg:w-80 space-y-6">
                <div class="bg-white rounded-3xl shadow-card p-6">
                    <h3 class="text-lg font-bold text-gray-900">Photos</h3>
                    <div class="mt-4 grid grid-cols-2 gap-3">
                        <div class="h-24 rounded-2xl bg-gray-100"></div>
                        <div class="h-24 rounded-2xl bg-gray-100"></div>
                        <div class="h-24 rounded-2xl bg-gray-100"></div>
                        <div class="h-24 rounded-2xl bg-gray-100"></div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-card p-6">
                    <h3 class="text-lg font-bold text-gray-900">Menus</h3>
                    <ul class="mt-4 space-y-3 text-sm text-gray-600">
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-500"></i> Menu Déjeuner</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-500"></i> Menu Dégustation</li>
                        <li class="flex items-center gap-2"><i class="ph ph-check-circle text-emerald-500"></i> Menu Enfant</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
