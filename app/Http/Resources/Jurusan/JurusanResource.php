<?php

namespace App\Http\Resources\Jurusan;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JurusanResource extends JsonResource
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
            'created_at' => date_format($this->created_at, "d-m-Y H:i:s"),
        ];
    }
}
