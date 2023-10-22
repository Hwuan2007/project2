<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkMenu extends Model
{
    use HasFactory;
    protected $table = 'drink';
    public function menu()
    {
        return $this -> belongsTo(Menu::class, 'type_id');
    }
}
