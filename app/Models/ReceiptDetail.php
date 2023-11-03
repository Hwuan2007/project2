<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptDetail extends Model
{
    use HasFactory;
    protected $table = 'receipt_detail';
    protected $primaryKey = 'receipt_id';
    public $timestamps = false;

    public function receipt()
    {
        return $this -> belongsTo(Receipt::class , 'receipt_id');
    }
}
