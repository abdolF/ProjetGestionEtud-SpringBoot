<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter Etudiant') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-success-status class="mb-4" :status="session('message')" />

            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Apoge</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Adresse</th>
                        <th>Editer</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($student as $students)
                    <tr>
                        <td>{{ $students->id }}</td>
                        <td>{{ $students->code }}</td>
                        <td>{{ $students->nom }}</td>
                        <td>{{ $students->prenom }}</td>
                        <td>{{ $students->email }}</td>
                        <td>{{ $students->phone }}</td>
                        <td>{{ $students->adresse }}</td>
                        <td>
                            <a href="{{ url('/modifier-etudiant/'.$students->id ) }}" class="btn btn-primary">Modifier</a>
                        </td>
                        <td>
                            <form action="{{ url('delete-etudiant/'.$students->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9">No Record Found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            </div>
        </div>
    </div>
</x-app-layout>