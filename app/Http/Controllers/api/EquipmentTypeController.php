<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EquipmentTypeResource;
use App\Models\EquipmentType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EquipmentTypeController extends Controller
{
    public function index(): JsonResponse
    {
        return EquipmentTypeResource::collection(EquipmentType::all())
            ->response();
    }
}