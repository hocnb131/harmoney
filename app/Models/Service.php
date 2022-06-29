<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// \Carbon\Carbon::setToStringFormat('d-m-Y');
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class Service extends Model
{
    use HasFactory;
    
    protected $table = 'service';
    protected $fillable = [
        'name',
        'icon',
        'room_id',
        'serviceType',
    ];
    public $timestamps = false;
}

