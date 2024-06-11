<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KlaimPromo extends Model
{
    use HasFactory;

    protected $table = 'Klaim_Promo';

    protected $primaryKey = 'Id_Klaim';

    protected $fillable = ['Id_Pengguna', 'Id_Promo', 'Status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_Pengguna');
    }
    public function promo()
    {
        return $this->belongsTo(Promo::class, 'Id_Promo');
    }
}
