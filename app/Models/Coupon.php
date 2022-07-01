<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// \Carbon\Carbon::setToStringFormat('d-m-Y');
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupon';
    protected $fillable = [
        'code',
        'started_at',
        'ended_at',
        'percent',
        'amount',
        'used',
        'ticket_id',
    ];
}