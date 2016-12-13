<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table='guru';
    protected $fillable = ['nis', 'nama_siswa', 'alamat', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'keterangan', 'agama_id', 'mapel_id'];

    public function agama()
    {
    	return $this->belongsTo('App\Agama');
    }

    public function mapel()
    {
    	return $this->hasOne('App\Mapel');
    }
}
