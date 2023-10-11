<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserDashboard extends Model
{
    use HasFactory;
    public function index(){
        $staff = DB::table('staff')
            ->join('role','staff.staff_id','=','role.role_id')
            ->select([
                'staff.*',
                'role.role_name AS role_name'
            ])
            ->get();
        return $staff;
    }

}
