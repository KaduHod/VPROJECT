<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiSpoonacularController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [homeController::class , 'index']);
Route::get('/', [homeController::class , 'index']);
Route::get('/show/{id}',[homeController::class , 'showRecepi']);
Route::get('/', [homeController::class , 'index']);
Route::post('searchRecepis', [homeController::class , 'filter']);



Route::get('ShowRecepiJSON/{id}', function($id){
    $ingredientesVeganos = ["1. Beans", "2. Grains", "3. Tempeh", "4. Tofu", "5. Nuts",
    "6. Dried fruits","7. Vegetable stock","8. Nutritional yeast", "9. Miso", "10. Tahini",
    "11. Dried sea vegetables","12. coconut oil","14. Maple syrup", "15. Ground flax seeds"];

    $recepi = Http::get('https://api.spoonacular.com/recipes/' . $id . '/information?apiKey=320a743c596146fd8c714d8be6d67345');
    $receita = $recepi->json();
    dd($receita);
});

