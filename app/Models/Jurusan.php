<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jurusan';

    protected $table = 'jurusan';

    protected $fillable = ['kode_jurusan', 'nama_jurusan'];

    public function mahasiswa()
     {
        return $this->HasMany(Mahasiswa::class, 'id_jurusan', 'id_jurusan');
    }

}
