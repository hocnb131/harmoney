<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class Branch extends Model
{
    use HasFactory;
    protected $table = 'branch';
    protected $fillable = [
        'name',
        'email',
        'address',
        'phoneNumber',
        'description',
        'thumbnail',
        'thumbnailDescription',
        'slug',
        'status',
        'nameEn',

        // 'created_at',
        // 'updated_at',
    ];
    // join 1 - 1
    public function provinces(){
        return $this->hasOne(Province::class,'id','province_id');
    }
    
}
