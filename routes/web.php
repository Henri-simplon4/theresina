<?php
use App\Http\Controllers\AppliControllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});
Route::get('/accueil' ,[AppliControllers::class , 'index' ])->name('accuiel');
Route::get('/connexion' ,[AppliControllers::class , 'connec' ])->name('connec');
Route::get('/inscription' ,[AppliControllers::class , 'inscrir' ])->name('insc');

Route::get('/incriptio' ,[AppliControllers::class , 'secret' ])->name('admin');
//
Route::get('/adminn', [AppliControllers::class, 'creat'])->name('option');
//
Route::get('/ajouteret' ,[AppliControllers::class , 'etudiant' ])->name('etude');
Route::get('/connecsecretaire' ,[AppliControllers::class , 'secretai' ])->name('secreta');
//parti administrateur 
Route::post('/inscriptionad', [AppliControllers::class, 'store'])->name('enregistre');
Route::post('/authentification', [AppliControllers::class, 'connexion'])->name('connetion');
Route::get('/deconnecter', [AppliControllers::class, 'deconnexion'])->name('deconnct');
//partie secretaire 
Route::post('/ajouter', [AppliControllers::class, 'stor'])->name('secre');
Route::post('/authentificationse', [AppliControllers::class, 'connexionsec'])->name('conex');
Route::get('/ajoueretude' ,[AppliControllers::class , 'etudee' ])->name('etudee');

//filier 
Route::post('/admin', [AppliControllers::class, 'niveau'])->name('secre');
Route::post('/admin', [AppliControllers::class, 'cylclee'])->name('cycl');
Route::post('/admin', [AppliControllers::class, 'filier'])->name('fillie');
Route::post('/ajout-cycle', [AppliControllers::class, 'cylcle'])->name('cycle');
Route::post('/ajout-filiere', [AppliControllers::class, 'filier'])->name('cycle');
Route::post('/ajout-niveau', [AppliControllers::class, 'niveau'])->name('cycle');
Route::get('liste-etudiant', [AppliControllers::class, 'liste'])->name('liste-etudiant');

Route::get('/admin' ,[AppliControllers::class , 'admi' ])->name('administ');
//enregistremen etudiant
Route::post('/etudiant', [AppliControllers::class, 'etudian'])->name('yaroma');
Route::middleware('auth')->group(function () {
    // Mettez ici toutes les routes que vous voulez limiter à l'accès aux utilisateurs connectés
   
    Route::get('/secretaire' ,[AppliControllers::class , 'secretair' ])->name('secretaire');
});
// Route::get('/login', function () {
//     // Your login page logic here
// })->name('login');
