<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['costumerName','productName', 'quantity', 'desc'];
}
