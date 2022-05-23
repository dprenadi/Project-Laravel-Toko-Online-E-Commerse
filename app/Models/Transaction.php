<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'users_id', 
    //     'inscurance_price',
    //     'shipping_price',
    //     'total_price',
    //     'transaction_status',
    //     'code'
    // ];

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo( User::class, 'users_id', 'id');
    }

    public function transaction_detail(){
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }
}