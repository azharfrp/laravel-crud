<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GampanganModel extends Model{
    use HasFactory;

    // Informasi Nama Table
    protected $table = 'crudgampangan';
    
    // Informasi Kolom Primary Key
    protected $primaryKey = 'id';

    // Definisikan Kolom yang Bisa di Input
    protected $fillable = [
        'title', 'body'
    ];
}
