<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiSpoonacular;
use Illuminate\Support\Facades\Http;

class homeController extends Controller
{
    public function index(){
        $ingredientes = ["Beans", "Grains", "Tempeh", "Tofu", "Nuts","Dried fruits","Vegetable stock","Nutritional yeast", "Miso", "Tahini","Dried sea vegetables","coconut oil","Maple syrup", "Ground flax seeds"];
        //dd($receitas);
        
        return view('index', compact('ingredientes'));
    }
    public function filter(Request $request){
        $apiKey = 'apiKey=' . $_ENV['API_KEY_SPOONACULAR'];

        $prefix = 'https://api.spoonacular.com/recipes/complexSearch?';

        $diet = 'diet=vegan';

        $ingredientesArr = [];
        foreach($request->all() as $chave => $ingrediente){
            if($chave != '_token') $ingredientesArr[] = $ingrediente;
        }
        
        $ingredientesURL = implode(',', $ingredientesArr);
        $ingredients = 'includeIngredients=' . $ingredientesURL;

        $number = 'number=100';

        $URL = $prefix .  $apiKey . '&' . $diet . "&"  . $ingredients . '&' . $number;
        
        $receitas = Http::get($URL)->json()['results'];
        //dd($receitas);
        return view('receitas', compact('receitas'));
    }

    public function showRecepi($id){
        $receita = ApiSpoonacular::getInstructions($id);
        
        return view('recepi.show', compact('receita'));
    }
}
