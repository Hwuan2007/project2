<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipping_method extends Model
{
    use HasFactory;
    protected $table = 'shipping_method';
    public $timestamps = false;
    protected $fillable = ['shipping_name','shipping_status'];
    public function receipt(){
        return $this -> hasMany(Receipt::class);
    }
}
