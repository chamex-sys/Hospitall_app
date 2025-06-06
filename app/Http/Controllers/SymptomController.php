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
    $symptomsInput = strtolower($request->input('symptoms'));

    $symptomKeywords = [
        'skin' => ['boutons', 'eczéma', 'acné', 'démangeaisons', 'peau', 'psoriasis', 'taches'],
        'eye' => ['vue', 'vision', 'flou', 'yeux', 'larmoiement', 'picotements', 'œil', 'oeil'],
        'heart' => ['coeur', 'palpitations', 'douleur poitrine', 'essoufflement', 'hypertension', 'rythme cardiaque'],
        'bones' => ['dos', 'articulations', 'genou', 'épaule', 'fracture', 'os', 'arthrose', 'douleurs musculaires'],
        'nose' => ['nez', 'rhume', 'sinusite', 'toux', 'fievre', 'gorge', 'grippe', 'allergie', 'maux de tête'],
    ];

    $matchedSpeciality = null;

    foreach ($symptomKeywords as $speciality => $keywords) {
        foreach ($keywords as $keyword) {
            if (str_contains($symptomsInput, $keyword)) {
                $matchedSpeciality = $speciality;
                break 2; // Sort des deux boucles
            }
        }
    }

    if ($matchedSpeciality) {
        $doctors = Doctor::where('speciality', $matchedSpeciality)->get();
    } else {
        $doctors = collect(); // Aucun médecin trouvé
    }

    return view('patient.suggested_doctors', compact('doctors', 'symptomsInput'));
}


}
