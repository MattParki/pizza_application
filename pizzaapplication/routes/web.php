<?php
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\PizzaPriceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//the name allows us to reference the routes, and doesn't take into account the fact its a get or post request
//naming also allows us to just reference the name and so we don't have to update each view file, just referencing
//the dynamic request in each view
//PizzaController
Route::get('pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
//PizzaPriceController
Route::post('/pizzas/creatingthepizza', [PizzaPriceController::class, 'storePizza'])->name('pizzas.storePizza');
Route::get('/pizzas/createthepizza', [PizzaPriceController::class, 'createPizza']);
Route::get('/pizzas/createthepizza/display', [PizzaPriceController::class, 'display']);
Route::get('/pizzas/createthepizza/{id}', [PizzaPriceController::class, 'show']);
Route::get('/pizzas/createthepizza/display/pizza_edit/{id}', [PizzaPriceController::class, 'showPizzaToEdit']);
Route::post('/pizzas/createthepizza/display/pizza_edit/{id}', [PizzaPriceController::class, 'editPizza'])->name('pizzas.editPizza');

//Route::post('/pizzas/adm/pricecreate/{id}', [PizzaController::class, 'showPrice'])->name('pizzas.showPrice')->middleware('auth');
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', [PizzaController::class, 'delete'])->name('pizzas.delete')->middleware('auth');


Auth::routes([
    'register' => true
]);

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
