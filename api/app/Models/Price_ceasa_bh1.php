<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price_ceasa_bh extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date'                   ,      
        'product'                ,
        'embalagem'              ,
        'price_min'              ,
        'price_com'              ,
        'price_max'              ,
        'situation' 
    ];
}
