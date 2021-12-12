<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $timestamps = false;
    //set thoi gian k cho chay
    protected $fillable= [
        'brand_name'
        ,'brand_desc'
        , 'brand_status'
    ];
    protected $table = 'tbl_brand_product';
}
