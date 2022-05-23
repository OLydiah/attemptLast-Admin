<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_cart_items extends Model
{
    use HasFactory;

    protected $fillable = [
        'itemName',
        'productCode',
        'itemQty',
        'price',
    ];
}
