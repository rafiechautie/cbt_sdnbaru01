<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'mata_pelajaran';
    protected $fillable = ['nama_mapel', 'kode_mapel'];

    public function guru()
    {
        return $this->hasMany(Guru::class, 'mapel_id');
    }
}
