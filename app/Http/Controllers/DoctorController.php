<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class DoctorController extends Controller
{
    
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function calendar($id)
    {
        $doctor = Doctor::findOrFail($id);
        $appointments = Appointment::where('doctor', $doctor->name)->get();
        
        return view('doctors.calendar', compact('doctor', 'appointments'));
    }
}
