<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nim';

    protected $table = 'mahasiswa';

    protected $fillable = ['nim', 'nama', 'alamat', 'jekel', 'id_jurusan'];

    public function jurusan() {
        return $this->BelongsTo(Jurusan::class, 'id_jurusan', 'id_jurusan');
    }

}
