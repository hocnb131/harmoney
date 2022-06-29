<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// \Carbon\Carbon::setToStringFormat('d-m-Y');
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class Room extends Model
{
    use HasFactory;
    
    protected $table = 'room';
    protected $fillable = [
        'name',
        'adults',
        'children',
        'description',
        'calendar',
        'thumbnail',
        'thumbnailDescription',
        'price',
        'bedType',
        'area',
        'created_at',
        'updated_at',
        'slug',
        'nameEn',
        'status',
        'branch_id',
        'roomType',
    ];
  
}
