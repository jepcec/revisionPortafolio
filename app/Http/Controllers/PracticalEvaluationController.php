<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePracticalEvaluationRequest;
use App\Http\Requests\UpdatePracticalEvaluationRequest;
use Illuminate\Http\Request;
use App\Models\PracticalEvaluation;

class PracticalEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = PracticalEvaluation::all();
        return view('practical_evaluation.index', compact('evaluations'));
    }

    // Mostrar una evaluación práctica específica en una vista
    public function show($id)
    {
        $practical_evaluation = PracticalEvaluation::find($id);

        if (!$practical_evaluation) {
            return redirect()->route('practical-evaluation.index')->with('error', 'Evaluation not found');
        }

        return view('practical_evaluation.show', compact('practical_evaluation'));
    }

    // Crear una nueva evaluación práctica y redirigir al formulario de creación
    public function create()
    {
        return view('practical_evaluation.create');
    }

    // Almacenar una nueva evaluación práctica
    public function store(Request $request)
    {
        $request->validate([
            'id_professor' => 'required|integer|exists:professors,id',
            'id_portfolio' => 'required|integer|exists:portfolios,id',
            'cover' => 'required|integer',
            'academic_load' => 'required|integer',
            'philosophy' => 'required|integer',
            'cv' => 'required|integer',
            'academic_progress' => 'required|integer',
            'attendance_record' => 'required|integer',
            'teaching_activities' => 'required|integer',
            'practical_grades' => 'required|integer',
            'projects' => 'required|integer',
        ]);

        PracticalEvaluation::create($request->all());

        return redirect()->route('practical-evaluation.index')->with('success', 'Evaluation created successfully');
    }

    // Mostrar el formulario para editar una evaluación práctica
    public function edit($id)
    {
        $practical_evaluation = PracticalEvaluation::find($id);

        if (!$practical_evaluation) {
            return redirect()->route('practical-evaluation.index')->with('error', 'Evaluation not found');
        }

        return view('practical_evaluation.edit', compact('practical_evaluation'));
    }

    // Actualizar una evaluación práctica
    public function update(Request $request, $id)
    {
        $practical_evaluation = PracticalEvaluation::find($id);

        if (!$practical_evaluation) {
            return redirect()->route('practical-evaluation.index')->with('error', 'Evaluation not found');
        }

        $request->validate([
            'id_professor' => 'nullable|integer|exists:professors,id',
            'id_portfolio' => 'nullable|integer|exists:portfolios,id',
            'cover' => 'nullable|integer',
            'academic_load' => 'nullable|integer',
            'philosophy' => 'nullable|integer',
            'cv' => 'nullable|integer',
            'academic_progress' => 'nullable|integer',
            'attendance_record' => 'nullable|integer',
            'teaching_activities' => 'nullable|integer',
            'practical_grades' => 'nullable|integer',
            'projects' => 'nullable|integer',
        ]);

        $practical_evaluation->update($request->all());

        return redirect()->route('practical-evaluation.index')->with('success', 'Evaluation updated successfully');
    }

    // Eliminar una evaluación práctica
    public function destroy($id)
    {
        $practical_evaluation = PracticalEvaluation::find($id);

        if (!$practical_evaluation) {
            return redirect()->route('practical-evaluation.index')->with('error', 'Evaluation not found');
        }

        $practical_evaluation->delete();

        return redirect()->route('practical-evaluation.index')->with('success', 'Evaluation deleted successfully');
    }
}
