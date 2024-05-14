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
        $form_data = $data;
        $response = Http::post("http://127.0.0.1:5000/predict",$data);

        $data_response = $response->json();
        //dd($data);
        $prediction = $data_response[0]['prediction'];
        if(Auth::user()){
            $data['user_id'] = auth()->user()->id;
        }
        $data['prediction'] = $prediction;
        session()->put('prediction',$prediction);
        Prediction::create($data);
        return view('index',compact('prediction','form_data'));
    }

    public function new(){
        return view('index');
    }

    public function clear(){
        if(session()->has('prediction')){
            $prediction = session()->get('prediction');
            session()->remove('prediction');
            return view('index',compact('prediction'));
        }else{
            return view('index');
        }
    }
}

