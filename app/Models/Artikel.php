<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_artikel', 'nama_artikel', 'desc_artikel', 'thumbnail'];
}
