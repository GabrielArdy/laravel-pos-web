<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $primaryKey = 'id_supplier';
    
    protected $fillable = [
        'supplier_name',
        'supplier_address',
        'supplier_phone',
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'id_supplier', 'id_supplier');
    }
}
