<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_masuk extends Model
{
    use HasFactory;
  	# Tentukan nama tabel terkait
 	//protected $table = 'mahasiswas'; // jika aturan penamaan model dan migration singular dan plural maka code ini tidak perlu digunakan

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = ['nama_barang', 'jumlah', 'tgl_masuk'];

	/*
	 * Relasi One-to-One
	 * =================
	 * Buat function bernama wali(), dimana model 'Mahasiswa' memiliki relasi One-to-One
	 * terhadap model 'Wali' melalui 'id_mahasiswa'
	 */
	public function wali() 
	{
		return $this->hasOne('App\Models\barang_masuk', 'id_barang');
	}
  
  	# Relasi One-to-Many nanti disini...

	# Relasi Many-to-Many nanti disini...
}
