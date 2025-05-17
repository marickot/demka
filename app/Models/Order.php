<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'phone', 'address', 'user_id', 'date',  'time', 'type', 'type_of_payment'];
    public function desc(){
        return $this->hasOne(Description::class);
    }
}

