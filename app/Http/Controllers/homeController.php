<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiSpoonacular;
use Illuminate\Support\Facades\Http;

class homeController extends Controller
{
    public function index(){
        $receitas = ApiSpoonacular::getReceita();
        return view('index', compact('receitas'));
    }
}
