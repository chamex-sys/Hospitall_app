<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;


class SymptomController extends Controller
{
    // Affiche le formulaire
 public function form()
{
    $doctor = Doctor::all(); // ou une requête filtrée si besoin
    return view('patient.symptoms', compact('doctor'));
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


public function suggest(Request $request)
{
    $symptoms = strtolower($request->input('symptoms')); // convertit en minuscule

    // Liste simple de correspondance mot-clé → spécialité
    $specialities = ['eye', 'heart', 'bones', 'nose', 'skin'];

    $matchedSpeciality = null;

    foreach ($specialities as $speciality) {
        if (str_contains($symptoms, $speciality)) {
            $matchedSpeciality = $speciality;
            break;
        }
    }

    if ($matchedSpeciality) {
        $doctors = Doctor::where('speciality', $matchedSpeciality)->get();
    } else {
        $doctors = collect(); // Aucun médecin trouvé
    }

    return view('patient.suggested_doctors', compact('doctors', 'symptoms'));
}

}
