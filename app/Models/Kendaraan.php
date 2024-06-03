<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = "Kendaraan";
    protected $primaryKey = "Id_Kendaraan";
    
    protected $fillable = [
        'Nama_Kendaraan',
        'Jenis_Kendaraan',
        'Merk',
        'Harga',
        'Stok',
        'Deskripsi',
        'Gambar',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

}
