<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserDashboard extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $primaryKey = 'staff_id';
    public $timestamps = false;
    protected $fillable = ['staff_id', 'staff_name', 'staff_phonenumber', 'staff_address'];

    public function receipt(){
        return $this -> hasMany(Receipt::class);
    }

}
