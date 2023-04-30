<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelPetani extends Model
{
    use HasFactory;
    protected $table = 'artikelpetani';
    protected $primaryKey = 'id_artikelpetani';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_artikelpetani', 'nama_artikelpetani', 'desc_artikelpetani', 'thumbnail'];
}