<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Http\Resources\JurusanResource;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class jurusanApiContoller extends Controller
{
    function index()  {
        $jurusan = Jurusan::all();
        // return response()->json(['data' => $jurusan]);\
        return JurusanResource::collection($jurusan);

    }
}
