<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
    'plan',
    'orderId',
    'transaction_id',
    'user_id',
    'user_id_fk',
    'amount',
    'payment_mode',
    'status',
    'sdate',
    'active_from',
    'edate', // if used
];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    } 

}
