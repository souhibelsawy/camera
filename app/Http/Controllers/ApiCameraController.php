<?php

namespace App\Http\Controllers;

use App\Http\Resources\CameraResource;
use App\Models\Camera;
use Illuminate\Http\Request;

class ApiCameraController extends Controller
{
    public function index()
    {
        $cameras = Camera::all();

        return CameraResource::collection($cameras);
    }
}
