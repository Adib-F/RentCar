<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;
    protected $table = "Notifikasi";
    protected $primaryKey = 'Id_Notifikasi';
    protected $fillable = [
        'Id_Pengguna',
        'Id_Rental',
        'Pesan',
        ];
        public function user():BelongsTo
        {
            return $this->belongsTo(User::class, 'Id_Pengguna');
        }

        public function rental():BelongsTo
        {
            return $this->belongsTo(Rental::class, 'Id_Rental');
        }
}
