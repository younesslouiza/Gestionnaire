<?php

use App\Http\Controllers\BonCommandeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ProduitController;
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
    return view('dashbord');
});

Route::resource('categorie', CategorieController::class);
Route::resource('produit', ProduitController::class);
Route::resource('marque', MarqueController::class);
Route::resource('client', ClientController::class);
Route::resource('devis', DevisController::class);
Route::resource('bon_de_commande',BonCommandeController::class);
Route::resource('facture',FactureController::class);
Route::resource('fournisseur',FactureController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
