<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// \Carbon\Carbon::setToStringFormat('d-m-Y');
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class Role extends Model
{
    use HasFactory;
    
    protected $table = 'permission';
    protected $fillable = [
        'name',
    ];
    
    // join 1 - n
    // public function branchs(){
    //     // return $this->hasMany(Branch::class,'province_id','id');
    //     return $this->hasMany(Branch::class,'province_id','id');
    // }
    
}
