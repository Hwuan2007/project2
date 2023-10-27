<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $table = 'receipt';
    public $timestamps = false;
    protected $fillable = ['total_price','user_id', 'note','shipping_id'];
    public function shipping_method()
    {
        return $this -> belongsTo(shipping_method::class);
    }
}
