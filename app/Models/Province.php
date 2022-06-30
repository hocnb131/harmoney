<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// \Carbon\Carbon::setToStringFormat('d-m-Y');
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class Province extends Model
{
    use HasFactory;
    
    protected $table = 'province';
    protected $fillable = [
        'name',
        // 'create_at',
        'status',
        'thumbnail',
        'thumbnailDescription',
        'description',
        // 'created_at',
        // 'updated_at',
    ];
    
    // join 1 - n
    public function branchs(){
        // return $this->hasMany(Branch::class,'province_id','id');
        return $this->hasMany(Branch::class,'province_id','id');
    }
    // join 1 - n
    // public function branchs(){
    //     // return $this->hasMany(Branch::class,'province_id','id');
    //     return $this->hasMany(Branch::class,'id','province_id');
    // }
    // //thêm localScope
    // public function scopeSearch($query){
    //     if($key = request()->key){
    //         $query = $query->where('name','like','%'.$key.'%');
    //         }
    //         return $query;
    // }
    // public function getData(){
    //     return [
    //         'blog1',
    //         'blog2'
    //     ];
    // }
}
