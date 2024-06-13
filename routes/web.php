<?php

use App\Models\GameResult;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Connect4Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = auth()->user();

    $userResult = $user->gameResult()->latest()->paginate(10);
    // leaderboard : find the winner who win the most games
// Retrieve the leaderboard data where winner is 'USER'

    $leaderboards = GameResult::with('user')
                              ->select('user_id', DB::raw('count(*) as total_wins'))
                              ->where('winner', 'USER')
                              ->groupBy('user_id')
                              ->orderBy('total_wins', 'desc')
                              ->limit(10)->get();


    return view('dashboard', compact('userResult', 'leaderboards'));
})->middleware([ 'auth', 'verified' ])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ ProfileController::class, 'edit' ])->name('profile.edit');
    Route::patch('/profile', [ ProfileController::class, 'update' ])->name('profile.update');
    Route::delete('/profile', [ ProfileController::class, 'destroy' ])->name('profile.destroy');

    Route::get('game', [ Connect4Controller::class, 'index' ])->name('game');
    Route::post('/game/result', [ Connect4Controller::class, 'storeResult' ]);
});

require __DIR__ . '/auth.php';
