<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    protected $table = 'outcomes';

    protected $primaryKey = 'outcome_id';

    protected $fillable = [
        'outcome_description',
        'outcome_amount',
    ];
}
