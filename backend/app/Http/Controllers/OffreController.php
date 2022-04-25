<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function index(){
        return view('pages/offre');
    }

}
