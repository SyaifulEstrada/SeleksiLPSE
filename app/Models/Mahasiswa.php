<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nim';

    protected $table = 'mahasiswa';

    protected $fillable = ['nim', 'nama', 'alamat', 'jekel', 'jurusan'];

    public function Jurusan() : hasOne {
        return $this->hasOne(Jurusan::class, 'jurusan', 'jurusan');
    }

}
