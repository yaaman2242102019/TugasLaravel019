<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = "berita";

    protected  $primaryKey = "id_berita";

    protected  $fillable = ["judul_berita","isi_berita","gambar_berita","id_kategori"];

    public function kategori(){
        return $this->belongsTo(kategori::class,'id_kategori');
    }
}
