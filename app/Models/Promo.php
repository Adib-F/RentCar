<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;
    protected $table = "Promo";
    protected $primaryKey = 'Id_Promo';
    protected $fillable = [
        'Nama_Promo',
        'Kode_Promo',
        'Deskripsi',
        'Diskon',
        'Gambar'
        ];
    
        public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
