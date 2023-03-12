<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;


    protected $fillable = [
        'code',
        'name',
        'description',
        'type',
        'value',
        'valid_from',
        'valid_to',
        'is_active',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_vouchers', 'voucher_id', 'user_id');
    }
}
