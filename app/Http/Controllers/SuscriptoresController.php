<?php

namespace App\Http\Controllers;

use App\Suscriptor;
use Illuminate\Http\Request;


class SuscriptoresController extends Controller
{
    public function inicio()
    {
    	$suscriptores = Suscriptor::all();

    	return view('suscriptores.inicio', compact('suscriptores'));
    }
}
