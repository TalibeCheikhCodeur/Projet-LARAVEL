<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNiveauRequest;
use App\Http\Requests\UpdateNiveauRequest;
use App\Models\Niveau;

class NiveauController extends Controller
{

    public function index()
    {
        return Niveau::with('classes')->get();
    }
}
