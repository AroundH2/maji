<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    public function responses()
    {
        return $this->hasMany(SurveyResponse::class, 'question_id');
    }
}
