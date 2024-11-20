<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter Etudiant') }}
        </h2>
    </x-slot>

    <div class="py-12">

    <x-success-status class="mb-4" :status="session('message')" />
    <x-validation-errors class="mb-4" :errors="$errors" />


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('add-etudiant') }}" method="POST">
                    @csrf

                <div>
                    <x-input-label for="code" :value="__('Apoge')" />
                    <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')" autofocus />
                </div>

                <div>
                    <x-input-label for="nom" :value="__('nom etudiant')" />
                    <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" autofocus />
                </div>
                <div>
                    <x-input-label for="prenom" :value="__('prenom etudiant')" />
                    <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" autofocus />
                </div>
                <div>
                    <x-input-label for="email" :value="__('email etudiant')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus />
                </div>
                <div>
                    <x-input-label for="phone" :value="__('phone etudiant')" />
                    <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" autofocus />
                </div>
                <div>
                    <x-input-label for="adresse" :value="__('adresse')" />
                    <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" autofocus />
                </div>
                <div>
                <x-primary-button class="ml-3">
                {{ __('sauvgarder') }}
                </x-primary-button>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</x-app-layout>