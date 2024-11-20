<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter Etudiant') }}
        </h2>
    </x-slot>

    <div class="py-12">

    
    <x-validation-errors class="mb-4" :errors="$errors" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('update-etudiant/'.$students->id) }}" method="POST">
                    @csrf
                    @method('PUT')
<!-- 
                <div>
                    <x-input-label for="code" :value="__('code etudiant')" />
                    <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" :value="$students->code" autofocus />
                </div> -->

                <div>
                    <x-input-label for="nom" :value="__('nom etudiant')" />
                    <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="$students->nom" autofocus />
                </div>
                <div>
                    <x-input-label for="prenom" :value="__('prenom etudiant')" />
                    <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="$students->prenom" autofocus />
                </div>
                <div>
                    <x-input-label for="email" :value="__('email etudiant')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$students->email" autofocus />
                </div>
                <div>
                    <x-input-label for="phone" :value="__('phone etudiant')" />
                    <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="$students->phone" autofocus />
                </div>
                <div>
                    <x-input-label for="adresse" :value="__('adresse')" />
                    <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="$students->adresse" autofocus />
                </div>
                <div>
                <x-primary-button class="ml-3">
                {{ __('Modifier Etudiant') }}
                </x-primary-button>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</x-app-layout>