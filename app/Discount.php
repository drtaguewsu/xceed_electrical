<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = 'discounts';
    protected $primaryKey = 'pk_discount_id';
    protected $fillable = [
            'discount_name', 
            'discount_rate',
            'discount_archived'	
        ];

}
