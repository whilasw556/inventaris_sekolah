<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_masuk extends Model
{
	use HasFactory;
    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['barangmasuk'];
    // memberikan akses data apa saja yang bisa diisi
    protected $fillable = ['barangmasuk'];
    // mencatat waktu pembuatan dan update data otomatis
    public $timestamp = true;
  	# Relasi One-to-Many nanti disini...

	# Relasi Many-to-Many nanti disini...
}
