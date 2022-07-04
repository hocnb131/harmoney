<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class Review extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $fillable = [
        'user_id',
        // 'create_at',
        'room_id',
        'comment',
        'status',
        'rate',
      
    ];
    

    

}
