<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $table = 'receipt';
    protected $fillable = ['total_price','user_id', 'note','shipping_id', 'receipt_status'];
    public function shipping_method()
    {
        return $this -> belongsTo(shipping_method::class);
    }
    public function user()
    {
        return $this -> belongsTo(User::class , 'user_id');
    }
    public function receipt_detail(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this -> hasMany(ReceiptDetail::class);
    }
}
