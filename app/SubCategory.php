<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'itemsubcategories';
    protected $primaryKey = 'pk_subcategory_id';
    protected $fillable = [
            'subcategory_name', 
            'fk_category_id'
        ];

    protected $attributes = [
        'subcategory_archived' => 0
        ];

    public function categories()
    {
        return $this->belongsTo('App\Category', 'fk_category_id', 'pk_category_id');
    }
}
