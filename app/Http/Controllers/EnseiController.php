<?php

namespace App\Http\Controllers;

use App\Models\enseig;
use Illuminate\Http\Request;
use App\Http\Controllers\EnseiController;
use App\Http\Requests\EnseignantFormRequest;

class EnseiController extends Controller
{
    public function index()
    {
        $enseignants = enseig::all();
        return view('enseignant.index', compact('enseignants'));
    }

    public function create(){
        return view('enseignant.create');
    }
    public function store(EnseignantFormRequest $request){
       $data = $request->validated();
       $enseignants = enseig::create($data);
       return redirect('/add-enseignant')->with('message','Bien :)');
    }
    public function edit($enseignants_id)
    {
        $enseignants = enseig::find($enseignants_id);

        return view('enseignant.edit', compact('enseignants'));
    }

    public function update(EnseignantFormRequest $request, $enseignants_id)
    {
        $data = $request->validated();

        $enseignants = enseig::where('id', $enseignants_id)->update([
            'code' => $data['code'],
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            
            'adresse' => $data['adresse']
        ]);

        return redirect('/enseignants')->with('message','etudiant modifier avec succee');

    }

    public function destroy($enseignants_id)
    {
        $enseignants = enseig::find($enseignants_id)->delete();
        return redirect('/enseignants')->with('message','enseignant supprimer avec succee');
    }
}
