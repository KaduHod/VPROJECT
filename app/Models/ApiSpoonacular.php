<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ApiSpoonacular extends Model
{
    use HasFactory;
    public function getReceita(){
        $urlTeste ='includeNutrition=true';

        $urlPesquisa = 'ingredients=pasta,+cheese';
        $urlPesquisaTeste2 = 'ingredients=tofu,+tomatoe,+onion,+garlic';

        $response = Http::get('https://api.spoonacular.com/recipes/findByIngredients?apiKey=320a743c596146fd8c714d8be6d67345&' . $urlPesquisaTeste2);

        $receitas = $response->json();

        /* foreach($receitas as $receita){
            foreach($receita['missedIngredients'] as $ingrediente){
                echo 'Nome: ' . $ingrediente['originalName'] . '<br>';
            }
        } */
        return $receitas;
    }

    
}
