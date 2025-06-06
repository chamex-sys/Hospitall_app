<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class SymptomController extends Controller
{
    // Affiche le formulaire
    public function form()
    {
        return view('patient.symptoms');
    }

    // Analyse les symptômes et suggère un médecin
    public function analyze(Request $request)
    {
        $request->validate([
            'symptoms' => 'required|string|min:3'
        ]);

        $text = strtolower($request->input('symptoms'));

        // Dictionnaire de mots-clés → spécialité
        $keywords = [
            'fièvre' => 'généraliste',
            'toux' => 'pneumologue',
            'fatigue' => 'généraliste',
            'tête' => 'neurologue',
            'migraine' => 'neurologue',
            'coeur' => 'cardiologue',
            'thorax' => 'cardiologue',
            'ventre' => 'gastro-entérologue',
            'gorge' => 'orl',
            'nez' => 'orl',
            'peau' => 'dermatologue',
            'vue' => 'ophtalmologue',
        ];

        $speciality = null;

        foreach ($keywords as $keyword => $spec) {
            if (str_contains($text, $keyword)) {
                $speciality = $spec;
                break;
            }
        }

        $doctors = $speciality
            ? Doctor::where('speciality', $speciality)->get()
            : collect(); // collection vide si aucun mot-clé trouvé

        return view('patient.suggested_doctors', [
            'doctors' => $doctors,
            'speciality' => $speciality,
        ]);
    }
}
