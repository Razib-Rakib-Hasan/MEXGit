<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['name', 'product_id', 'qty', 'transaction_id', 'remarks', 'money_store_id', 'created_at', 'updated_at'];
}