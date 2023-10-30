<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DrinkDetail extends Model
{
    use HasFactory;
    protected $table = 'drink_detail';
    public $timestamps = false;
    protected $fillable = ['size_id', 'drk_id'];

    public function drink(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this -> belongsTo(Drink::class,  'drk_id');
    }
    public function size(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this -> belongsTo(Size::class, 'size_id');
    }
}
