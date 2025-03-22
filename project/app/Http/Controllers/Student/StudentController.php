<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Afficher la liste des étudiants
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Enregistrer un nouvel étudiant
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Student::create($request->all());
        
        return redirect()->route('students.index')
            ->with('success', 'Étudiant créé avec succès.');
    }

    /**
     * Afficher les détails d'un étudiant
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Afficher le formulaire de modification
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Mettre à jour un étudiant
     */
    public function update(Request $request, Student $student)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,'.$student->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'birthdate' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $student->update($request->all());
        
        return redirect()->route('students.index')
            ->with('success', 'Étudiant mis à jour avec succès.');
    }

    /**
     * Supprimer un étudiant
     */
    public function destroy(Student $student)
    {
        $student->delete();
        
        return redirect()->route('students.index')
            ->with('success', 'Étudiant supprimé avec succès.');
    }
}
