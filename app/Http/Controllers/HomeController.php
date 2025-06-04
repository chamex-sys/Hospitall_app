<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{ 
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                 $doctor = Doctor::all(); // ✅ Charger les docteurs ici
                return view('user.home', compact('doctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->route('login'); // ou ->back() si tu préfères
        }
    }
    public function  index(){
        if(Auth::id()){
            return redirect('home');
        }
        else {
        $doctor=doctor::all ();

        return view('user.home' , compact('doctor')); }
    }
    public function appointment(Request $request){

$data= new appointment;
$data->name=$request->name;
$data->email=$request->email;
$data->date=$request->date;
$data->phone=$request->number;
$data->message=$request->message;
$data->doctor=$request->doctor;
$data->status='In progress';
if(Auth::id()){
$data->user_id=Auth::user()->id; }
$data->save() ;
return redirect()->back()->with('message','Appointment Request successful , we will contact you soon !       ');

    }
    public function myappointment(){
        if(Auth::id()){
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();
        return  view('user.my_appointment', compact('appoint')) ;}
        else {return redirect()->back(); }
    }
    public function cancel_appoint($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();

    }

public function about() {
    return view('user.about');
}
    public function suggest(Request $request)
    {
        $symptoms = strtolower($request->input('symptoms'));

        // Simple matching avec la spécialité
        $specialities = [
            'eye' => ['vue', 'yeux', 'flou', 'vision'],
            'heart' => ['coeur', 'palpitations', 'douleur thoracique'],
            'bones' => ['os', 'fracture', 'douleur articulations'],
            'nose' => ['nez', 'rhume', 'sinus'],
            'skin' => ['peau', 'allergie', 'démangeaison'],
        ];

        $matchedSpeciality = null;

        foreach ($specialities as $key => $keywords) {
            foreach ($keywords as $word) {
                if (str_contains($symptoms, $word)) {
                    $matchedSpeciality = $key;
                    break 2;
                }
            }
        }

        if ($matchedSpeciality) {
            $doctors = Doctor::where('speciality', $matchedSpeciality)->get();
        } else {
            $doctors = collect(); // Empty
        }

        return view('patient.suggested_doctors', [
            'doctors' => $doctors,
            'speciality' => $matchedSpeciality
        ]);
    }
}
