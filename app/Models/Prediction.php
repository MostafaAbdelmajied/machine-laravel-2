<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    use HasFactory;
    protected $fillable = [
        'Gender',
        'Age',
        'Height',
        'Weight',
        'family_history_with_overweight',
        'FAVC', 
        'FCVC',
        'NCP',
        'CAEC',
        'SMOKE',
        'CH2O',
        'SCC',
        'FAF',
        'TUE',
        'CALC',
        'MTRANS',
        'prediction',
        'user_id'
    ];
}
