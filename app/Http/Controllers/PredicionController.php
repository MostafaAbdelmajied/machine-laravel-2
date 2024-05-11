<?php

namespace App\Http\Controllers;

use App\Models\Prediction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PredicionController extends Controller
{

    public function predict(Request $request) {
        $data = $request->validate([
        'Gender'=> 'required',
        'Age'=> 'required',
        'Height'=> 'required',
        'Weight'=> 'required',
        'family_history_with_overweight'=> 'required',
        'FAVC'=> 'required',
        'FCVC'=> 'required',
        'NCP'=> 'required',
        'CAEC'=> 'required',
        'SMOKE'=> 'required',
        'CH2O'=> 'required',
        'SCC'=> 'required',
        'FAF'=> 'required',
        'TUE'=> 'required',
        'CALC'=> 'required',
        'MTRANS'=> 'required',
        ]);

        $response = Http::post("https://machine-project-app-437e92dd5e13.herokuapp.com/predict",$data);

        $data_response = $response->json();
        //dd($data);
        $prediction = $data_response[0]['prediction'];
        if(Auth::user()){
            $data['user_id'] = auth()->user()->id;
        }
        $data['prediction'] = $prediction;
        Prediction::create($data);
        return view('index',compact('prediction'));
    }
}

