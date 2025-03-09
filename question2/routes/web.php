<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerController;
use App\Models\Player;
use App\Http\Controllers\SampleController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::get('/redirect',[HomeController::class,'redirect']);


require __DIR__.'/auth.php';


//create player route


Route::get('/players/create', [PlayerController::class, 'create'])->name('admin.create');
Route::post('/players/store', [PlayerController::class, 'store'])->name('players.store');


//chart
Route::get('/player-stats', [PlayerController::class, 'getStats']);











Route::get('/sample', [SampleController::class, 'show']);
Route::get('/play', [SampleController::class, 'show2']);


Route::get('/players/{id}', [PlayerController::class, 'show3'])->name('player.view');
use App\Http\Controllers\TeamController;

// Display teams and available players
Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');

// Show the form to create a new team
Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');

// Store the newly created team
Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
