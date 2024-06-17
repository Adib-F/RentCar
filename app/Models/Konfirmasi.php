<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Konfirmasi extends Model
{
    use HasFactory;

    protected $table = 'Konfirmasi';
    protected $primaryKey = 'Id_Konfirmasi';
    protected $fillable = [
        'Id_Rental',
        'Pengajuan',
    ];


}
