<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    protected $table = 'purchase_details';

    protected $primaryKey = 'id_purchase_detail';

    protected $fillable = [
        'id_purchase',
        'id_product',
        'purchase_price',
        'purchase_qty',
        'purchase_subtotal',
    ];

    public function purchase()
    {
        return $this->belongsTo(Purchase::class, 'id_purchase', 'id_purchase');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}
