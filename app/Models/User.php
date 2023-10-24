<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    protected $table = 'staff';
    protected $primaryKey = 'id';
    public $timestamps = false;
    use Authenticatable;

    protected $fillable = ['email','password','username', 'staff_phonenumber', 'staff_address','role_id'];


    public function role(){
        return $this -> belongsTo(Role::class);
    }

}
