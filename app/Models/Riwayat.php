<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $table = 'Riwayat';
    protected $primaryKey = 'Id_Riwayat';
    protected $fillable = [
        'Id_Rental',
        'Id_Status',
        'No_Pesanan',
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'Id_Rental');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'Id_Status');
    }
}
