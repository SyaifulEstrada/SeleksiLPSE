<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    use HasFactory;

    protected $primaryKey = 'jurusan';

    protected $table = 'jurusan';

    protected $fillable = ['jurusan', 'kode_jurusan'];

    public function Mahasiswa() : HasMany
     {
        return $this->HasMany(Mahasiswa::class, 'jurusan');
    }

}
