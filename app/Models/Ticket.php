<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// \Carbon\Carbon::setToStringFormat('d-m-Y');
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class Ticket extends Model
{
    use HasFactory;
    
    protected $table = 'ticket';
    protected $fillable = [
        
    ];
    // public $timestamps = false;
}