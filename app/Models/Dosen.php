<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $guarded = [];
    public function matkul()
    {
        return $this->belongsToMany(Matkul::class, 'dosen_matkul', 'dosen_id', 'matkul_id')
            ->withPivot('kelas_id', 'semester_id', 'tanggal')
            ->withTimestamps();
    }
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'dosen_matkul', 'dosen_id', 'kelas_id')
            ->withPivot('matkul_id', 'semester_id', 'tanggal')
            ->withTimestamps();
    }
}
