<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id';

    use Authenticatable;
    protected $fillable = ['email','password','username', 'user_phonenumber', 'user_address','role_id'];

    public function role(){
        return $this -> belongsTo(Role::class , 'role_id');
    }
    public function receipt(){
        return $this -> hasMany(Receipt::class);
    }
}
