<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFormRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(StudentFormRequest $request)
    {
        $data = $request->validated();

        $students = Student::create($data);
        return redirect('/add-etudiant')->with('message','etudiant added avec succee');
    }

    public function edit($students_id)
    {
        $students = Student::find($students_id);

        return view('student.edit', compact('students'));
    }

    public function update(StudentFormRequest $request, $students_id)
    {
        $data = $request->validated();

        $students = Student::where('id', $students_id)->update([
            'code' => $data['code'],
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'adresse' => $data['adresse']
        ]);

        return redirect('/etudiant')->with('message','etudiant modifier avec succee');

    }

    public function destroy($students_id)
    {
        $students = Student::find($students_id)->delete();
        return redirect('/etudiant')->with('message','etudiant supprimer avec succee');
    }
}
