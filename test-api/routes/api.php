<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TarefasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::group([

//     // 'middleware' => 'api',
//     // 'prefix' => 'auth'

// ], function ($router) {

// });

    Route::resource('person', PersonController::class);
    Route::get(
        'people',
        [PersonController::class, 'index']
    )->name('people');
    Route::resource('contacts', ContactController::class);
    Route::get('contacts/get_contacts_by_person', [PersonController::class, 'get_contacts_by_person']);
    Route::get('tarefas/verifica_colchetes_balanceados', [TarefasController::class, 'verificaColchetesBalanceados']);