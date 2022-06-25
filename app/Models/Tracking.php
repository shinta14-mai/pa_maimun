<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tracking extends Model
{
    use HasFactory, Notifiable;

    public $table = 'trackings';
    protected $fillable = [
        'keterangan'
    ];

    public function andal(){
        return $this-> hasOne(Andalalin::class);
    }
}
