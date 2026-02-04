@extends('layouts.restaurateur')

@section('header')
    Vue d'ensemble
@endsection

@section('content')
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-900">Bonjour, {{ Auth::user()->name }} ! 👋</h2>
        <p class="text-gray-500 mt-1">Gérez vos établissements et vos réservations depuis cet espace.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-3xl shadow-card flex items-center gap-5 border border-gray-100">
            <div class="w-14 h-14 rounded-2xl bg-orange-50 text-brand-500 flex items-center justify-center text-2xl">
                <i class="ph-fill ph-storefront"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm font-medium">Vos Restaurants</p>
                <h3 class="text-3xl font-bold text-gray-900">3</h3> 
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-card flex items-center gap-5 border border-gray-100">
            <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl">
                <i class="ph-fill ph-calendar-check"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm font-medium">Réservations</p>
                <h3 class="text-3xl font-bold text-gray-900">24</h3>
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-card flex items-center gap-5 border border-gray-100">
            <div class="w-14 h-14 rounded-2xl bg-gray-100 text-gray-600 flex items-center justify-center text-2xl">
                <i class="ph-fill ph-shield-check"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm font-medium">Statut</p>
                <h3 class="text-3xl font-bold text-gray-900">2 actifs</h3>
                <p class="text-xs text-gray-400">1 supprimé</p>
            </div>
        </div>

        <div class="bg-brand-500 p-6 rounded-3xl shadow-card flex items-center justify-between text-white relative overflow-hidden group cursor-pointer">
            <div class="relative z-10">
                <p class="text-white/80 text-sm font-medium mb-1">Développer votre activité</p>
                <h3 class="text-2xl font-bold">Ajouter un Resto</h3>
            </div>
            <a href="{{ route('restaurants.create') }}" class="w-12 h-12 bg-white text-brand-500 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition z-10">
                <i class="ph-bold ph-plus text-xl"></i>
            </a>
            <i class="ph-fill ph-fork-knife absolute -bottom-4 -right-4 text-8xl text-white/10 group-hover:scale-110 transition duration-500"></i>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
        <a href="{{ route('restaurants.create') }}" class="bg-white rounded-3xl border border-gray-100 p-6 shadow-card hover:border-brand-500 transition">
            <div class="w-12 h-12 rounded-2xl bg-brand-50 text-brand-600 flex items-center justify-center">
                <i class="ph ph-plus-circle"></i>
            </div>
            <h3 class="mt-4 font-bold text-gray-900">Ajouter un restaurant</h3>
            <p class="text-sm text-gray-500 mt-1">Publiez un nouvel établissement</p>
        </a>

        <a href="{{ route('restaurants.index') }}" class="bg-white rounded-3xl border border-gray-100 p-6 shadow-card hover:border-brand-500 transition">
            <div class="w-12 h-12 rounded-2xl bg-brand-50 text-brand-600 flex items-center justify-center">
                <i class="ph ph-storefront"></i>
            </div>
            <h3 class="mt-4 font-bold text-gray-900">Gérer mes restaurants</h3>
            <p class="text-sm text-gray-500 mt-1">Liste, statut, édition</p>
        </a>

        <a href="{{ route('restaurant.profile') }}" class="bg-white rounded-3xl border border-gray-100 p-6 shadow-card hover:border-brand-500 transition">
            <div class="w-12 h-12 rounded-2xl bg-brand-50 text-brand-600 flex items-center justify-center">
                <i class="ph ph-user"></i>
            </div>
            <h3 class="mt-4 font-bold text-gray-900">Modifier mon profil</h3>
            <p class="text-sm text-gray-500 mt-1">Informations personnelles</p>
        </a>
    </div>

    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-gray-900">Vos derniers ajouts</h2>
        <a href="{{ route('restaurants.index') }}" class="text-sm font-bold text-brand-500 hover:text-brand-600 transition">
            Voir tout <i class="ph-bold ph-arrow-right"></i>
        </a>
    </div>

    <div class="bg-white rounded-[2rem] border-2 border-dashed border-gray-200 p-12 text-center">
        <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
            <i class="ph-bold ph-storefront text-2xl"></i>
        </div>
        <h3 class="text-lg font-bold text-gray-900">Aucun restaurant pour le moment</h3>
        <p class="text-gray-500 text-sm mt-1 mb-6">Commencez par ajouter votre premier établissement pour recevoir des réservations.</p>
        <a href="{{ route('restaurants.create') }}" class="inline-flex items-center gap-2 bg-gray-900 text-white px-6 py-3 rounded-full text-sm font-bold hover:bg-brand-500 transition shadow-lg hover:shadow-brand-500/30">
            <i class="ph-bold ph-plus"></i> Créer mon restaurant
        </a>
    </div>
@endsection