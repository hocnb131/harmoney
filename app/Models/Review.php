<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Room;
use App\Models\User;
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
    
    public function rooms(){
        // return $this->hasMany(Branch::class,'province_id','id');
        return $this->belongsTo(\App\Models\Room::class);
    }
    public function users(){
        // return $this->hasMany(Branch::class,'province_id','id');
        return $this->belongsTo(Room::class);
    }
    

}
