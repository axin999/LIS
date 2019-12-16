<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientsController extends Controller
{
    public function addpatient(Request $request){
        $patient = new Patient(array(
            'first_name' => $request->get('firstname'),
            'middle_name' => $request->get('middlename'),
            'last_name' => $request->get('lastname')
        ));
        $patient->save();
    }
}
