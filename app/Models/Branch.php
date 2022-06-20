<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $table = 'branch';
    
    // join 1 - 1
    public function provinces(){
        return $this->hasOne(Province::class,'id','province_id');
    }
}
