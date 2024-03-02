<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = "kategori";

    protected  $primaryKey = "id_kategori";

    protected  $fillable = ["nama_kategori"];
}
