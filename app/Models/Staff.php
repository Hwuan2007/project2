<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
    use HasFactory;
    protected $table ='staff';
    public $timestamps = false;
    protected $fillable = [
        'username',
        'email',
        'password',
        'role_id',
       'staff_phonenumber',
      'staff_address'
    ];
      
}
