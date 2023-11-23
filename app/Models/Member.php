<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    protected $primaryKey = 'id_member';
    
    protected $fillable = [
        'member_code',
        'member_name',
        'member_address',
        'member_phone',
    ];
}
