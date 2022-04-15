<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TinjauLapang extends Model
{
    use HasFactory, Notifiable;

    public $table = 'tinjau';
    protected $fillable = [
        'tgl_tl',
        'waktu_tl'
    ];
}
