<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellingDetail extends Model
{
    protected $table = 'selling_details';

    protected $primaryKey = 'selling_detail_id';

    protected $fillable = [
        'selling_id',
        'product_id',
        'selling_price',
        'total',
        'sub_total',
        'discount',
    ];

    public function selling()
    {
        return $this->belongsTo(Selling::class, 'selling_id', 'selling_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
