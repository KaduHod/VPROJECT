<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiSpoonacularController extends Controller
{
    public function index(){
        $urlTeste ='includeNutrition=true';

        $urlPesquisa = 'ingredients=pasta,+cheese';
        $urlPesquisaTeste2 = 'ingredients=tofu,+tomatoe,+onion,+garlic';

        $response = Http::get('https://api.spoonacular.com/recipes/findByIngredients?apiKey=320a743c596146fd8c714d8be6d67345&' . $urlPesquisaTeste2);

        $receitas = $response->json();
        return $receitas;
    }
}
