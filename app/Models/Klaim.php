<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KlaimPromo extends Model
{
    use HasFactory;

    protected $table = 'Klaim_Promo';

    protected $primaryKey = 'Id_Klaim';

    protected $fillable = ['Id_Pengguna', 'Id_Promo', 'Status'];
}
