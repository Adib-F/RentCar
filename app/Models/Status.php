<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Status';
    protected $fillable = [
        'Id_Rental',
        'Status_Pengiriman'
        ];
}
