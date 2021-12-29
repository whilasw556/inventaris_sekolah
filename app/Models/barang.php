<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    # Tentukan nama tabel terkait
    // protected $table = 'wali';

    # MASS ASSIGNMENT
    # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    // protected $fillable = ['nama', 'id_mahasiswa'];

    /*
     * Relasi One-to-One
     * =================
     * Sebaliknya, buat function bernama mahasiswa(), dimana model 'Wali' memiliki relasi One-to-One (belongsTo)
     * sebagai timbal balik terhadap model 'Mahasiswa' melalui 'id_mahasiswa'
     */
    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\barang', 'id_barang_masuk');
    }
}
