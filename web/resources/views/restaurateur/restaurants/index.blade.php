@extends('layouts.restaurateur')

@section('header')
    Mes Restaurants
@endsection

@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-xl font-bold text-gray-900">Liste de vos établissements</h2>
        <a href="{{ route('restaurants.create') }}" class="bg-brand-500 text-white px-4 py-2 rounded-lg font-bold text-sm hover:bg-brand-600 transition flex items-center gap-2">
            <i class="ph-bold ph-plus"></i> Ajouter
        </a>
    </div>

    <div class="bg-white rounded-3xl shadow-card overflow-hidden border border-gray-100">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100 text-xs uppercase text-gray-500 font-semibold tracking-wider">
                    <th class="p-6">Nom</th>
                    <th class="p-6">Adresse</th>
                    <th class="p-6">Cuisine</th>
                    <th class="p-6 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                {{-- Example Row --}}
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="p-6 font-bold text-gray-900">Le Petit Bistro</td>
                    <td class="p-6 text-gray-500">12 Rue de la Paix, Paris</td>
                    <td class="p-6 text-gray-500">Française</td>
                    <td class="p-6 text-right space-x-2">
                        <a href="{{ route('restaurants.edit', 1) }}" class="text-brand-500 hover:text-brand-600 font-bold text-sm">Éditer</a>
                        <button class="text-red-500 hover:text-red-600 font-bold text-sm">Supprimer</button>
                    </td>
                </tr>
                {{-- End Example Row --}}
            </tbody>
        </table>
        
        {{-- Empty State (if needed)
        <div class="p-12 text-center text-gray-500">
            Aucun restaurant trouvé.
        </div>
        --}}
    </div>
@endsection
