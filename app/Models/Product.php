<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'offer_price', 'regular_price', 'description', 'photo', 'product_category_id', 'product_section_id', 'offer_discount', 'product_type_id', 'product_unit_id', 'created_at', 'updated_at'];
}