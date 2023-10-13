<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['staff_email','staff_pasword','staff_username', 'staff_phonenumber', 'staff_address','role_id'];

    public function role(){
        return $this -> belongsTo(Role::class);
    }

}
