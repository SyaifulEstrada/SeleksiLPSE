<?php

namespace App\Http\Resources\Mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nim' => $this->nim,
            'alamat' => $this->alamat,
            'jekel' => $this->jekel,
        ];
    }
}
