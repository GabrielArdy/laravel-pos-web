<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    protected $table = 'sellings';

    protected $primaryKey = 'selling_id';

    protected $fillable = [
        'id_member',
        'total_item',
        'total_price',
        'discount',
        'pay',
        'receivable',
        'user_id'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member', 'id_member');
    }

    public function sellingDetails()
    {
        return $this->hasMany(SellingDetail::class, 'selling_id', 'selling_id');
    }
}
