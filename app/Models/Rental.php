<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rental extends Model
{
    use HasFactory;
    protected $table = 'Rental';
    protected $primaryKey = 'Id_Rental';
    protected $fillable = [
        'Id_Pengguna',
        'Id_Kendaraan',
        'Id_Promo',
        'Alamat',
        'SIM',
        'Tanggal_Sewa',
        'Tanggal_Selesai',
        'Total_Harga',
        'Bukti_Pembayaran',
        'Pengajuan',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'Id_Pengguna');
    }
    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class, 'Id_Kendaraan');
    }
    public function promo(): BelongsTo
    {
        return $this->belongsTo(Promo::class, 'Id_Promo');
    }
    public function Konfirmasi()
    {
        return $this->hasMany(Konfirmasi::class, 'Id_Rental');
    }
    public function status()
    {
        return $this->hasMany(Status::class, 'Id_Rental');
    }
    public function riwayat()
    {
        return $this->hasOne(Status::class, 'Id_Rental');
    }

}
