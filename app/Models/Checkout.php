<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'user_id',
    'tour_id',
    'payment_status',
    'midtrans_url',
    'midtrans_booking_code',
    'payment_method_id',
    'proof_payment',
    'discount_id',
    'discount_total',
    'subtotal',
    'total_people',
    'total',
    'departured'
    ];

    // public function setExpiredAttribute($value)
    // {
    //    $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    // }

    // public function Camp()
    // {
    //     return $this->belongsTo(Camp::class);
    // }

    public function Tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
