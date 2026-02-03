<x-guest-layout>
    <div class="flex min-h-screen w-full">

        <!-- Left Side: Image & Branding -->
        <div class="hidden lg:flex w-1/2 bg-gray-900 relative items-center justify-center overflow-hidden">
            <img src="https://images.unsplash.com/photo-1556910103-1c02745a30bf?q=80&w=2070&auto=format&fit=crop" 
                 class="absolute inset-0 w-full h-full object-cover opacity-60">
            <div class="relative z-10 p-12 text-white max-w-lg">
                <div class="mb-6 w-12 h-12 bg-brand-500 rounded-xl flex items-center justify-center rotate-3">
                    <i class="ph-bold ph-chef-hat text-2xl"></i>
                </div>
                <h2 class="text-4xl font-bold mb-4">Rejoignez l'aventure.</h2>
                <p class="text-gray-300 text-lg">Créez votre compte pour réserver les meilleures tables ou gérer votre établissement.</p>
            </div>
        </div>

        <!-- Right Side: Registration Form -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-8 bg-white">
            
            <div class="w-full max-w-md">
                <div class="text-center mb-10">
                    <a href="/" class="inline-flex items-center gap-2 mb-2">
                        <span class="text-2xl font-bold tracking-tight text-gray-900">YouCo'<span class="text-brand-500">Done</span>.</span>
                    </a>
                    <h1 class="text-2xl font-bold text-gray-900 mt-4">Inscription</h1>
                    <p class="text-sm text-gray-500 mt-2">Déjà membre ? <a href="{{ route('login') }}" class="font-semibold text-brand-500 hover:text-brand-600 transition">Connectez-vous</a></p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Nom complet')" class="text-gray-700 font-semibold" />
                        <x-text-input id="name" class="block mt-2 w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:bg-white focus:border-brand-500 focus:ring-brand-500 transition-all duration-200" 
                                      type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="John Doe" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-semibold" />
                        <x-text-input id="email" class="block mt-2 w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:bg-white focus:border-brand-500 focus:ring-brand-500 transition-all duration-200" 
                                      type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="exemple@email.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Mot de passe')" class="text-gray-700 font-semibold" />
                        <x-text-input id="password" class="block mt-2 w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:bg-white focus:border-brand-500 focus:ring-brand-500 transition-all duration-200"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" class="text-gray-700 font-semibold" />
                        <x-text-input id="password_confirmation" class="block mt-2 w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:bg-white focus:border-brand-500 focus:ring-brand-500 transition-all duration-200"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Role Selection -->
                    <div>
                        <x-input-label for="role" :value="__('Je rejoins en tant que...')" class="text-gray-700 font-semibold mb-3 block" />
                        
                        <div class="grid grid-cols-2 gap-4">
                            <label class="relative flex flex-col items-center p-4 border-2 border-gray-100 rounded-2xl cursor-pointer hover:bg-orange-50 hover:border-brand-200 transition-all duration-200 has-[:checked]:border-brand-500 has-[:checked]:bg-orange-50/50 has-[:checked]:ring-1 has-[:checked]:ring-brand-500">
                                <input type="radio" name="role" value="3" class="sr-only" required {{ old('role') == 'client' ? 'checked' : '' }}>
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-2xl shadow-sm mb-3">😋</div>
                                <span class="text-sm font-bold text-gray-900">Client</span>
                                <span class="text-xs text-gray-500 text-center mt-1">Je veux découvrir des plats</span>
                            </label>

                            <label class="relative flex flex-col items-center p-4 border-2 border-gray-100 rounded-2xl cursor-pointer hover:bg-orange-50 hover:border-brand-200 transition-all duration-200 has-[:checked]:border-brand-500 has-[:checked]:bg-orange-50/50 has-[:checked]:ring-1 has-[:checked]:ring-brand-500">
                                <input type="radio" name="role" value="2" class="sr-only" {{ old('role') == 'restaurateur' ? 'checked' : '' }}>
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-2xl shadow-sm mb-3">👨‍🍳</div>
                                <span class="text-sm font-bold text-gray-900">Restaurateur</span>
                                <span class="text-xs text-gray-500 text-center mt-1">Je gère mon établissement</span>
                            </label>
                        </div>
                        
                        <x-input-error :messages="$errors->get('role')" class="mt-2" />
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-full shadow-sm text-sm font-bold text-white bg-brand-500 hover:bg-brand-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition-all duration-300 shadow-lg shadow-brand-500/30 transform hover:-translate-y-0.5">
                            {{ __('S\'inscrire') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
