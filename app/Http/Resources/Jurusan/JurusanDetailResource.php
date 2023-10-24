<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JurusanDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id_jurusan' => $this->id_jurusan,
            'kode_jurusan' => $this->kode_jurusan,
            'nama_jurusan' => $this->nama_jurusan,
            'nama_siswa' => $this->mahasiswa,
            'created_at' => date_format($this->created_at, "d-m-Y H:i:s"),
            'updated_at' => date_format($this->updated_at, "d-m-Y H:i:s"),
        ];
    }
}
