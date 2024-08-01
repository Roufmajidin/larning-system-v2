<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = 'matkul';
    protected $fillable = ['nama_mk'];
    public function matkul()
    {
        return $this->belongsToMany(Matkul::class, 'dosen_matkul', 'dosen_id', 'matkul_id')
            ->withPivot('kelas_id', 'semester_id', 'tanggal')
            ->withTimestamps();
    }
}
