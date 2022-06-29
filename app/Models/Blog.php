<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// \Carbon\Carbon::setToStringFormat('d-m-Y');
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class Blog extends Model
{
    use HasFactory;
    
    protected $table = 'blog';
    protected $fillable = [
        'status',
        'content',
        'slug',
        'name',
        'nameEn',
        'thumbnail',
        // 'created_at',
        // 'updated_at',
    ];
  
}
