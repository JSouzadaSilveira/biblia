<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\TestamentoController;
use App\Http\Controllers\VersiculoController;
use App\Models\Versiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// ===================== METHOD 1 ===============================
// Route::get('/testamento', [TestamentoController::class, 'index']);
// Route::get('/testamento/{id}', [TestamentoController::class, 'show']);
// Route::post('/testamento', [TestamentoController::class, 'store']);
// Route::put('/testamento/{id}', [TestamentoController::class, 'update']);
// Route::delete('/testamento/{id}', [TestamentoController::class, 'destroy']);

// Route::get('/livro', [LivroController::class, 'index']);
// Route::get('/livro/{id}', [LivroController::class, 'show']);
// Route::post('/livro', [LivroController::class, 'store']);
// Route::put('/livro/{id}', [LivroController::class, 'update']);
// Route::delete('/livro/{id}', [LivroController::class, 'destroy']);

// Route::get('/versiculo', [VersiculoController::class, 'index']);
// Route::get('/versiculo/{id}', [VersiculoController::class, 'show']);
// Route::post('/versiculo', [VersiculoController::class, 'store']);
// Route::put('/versiculo/{id}', [VersiculoController::class, 'update']);
// Route::delete('/versiculo/{id}', [VersiculoController::class, 'destroy']);


// ===================== METHOD 2 ===============================
// Route::apiResource('testamento', TestamentoController::class);
// Route::apiResource('livro', LivroController::class);
// Route::apiResource('versiculo', VersiculoController::class);


// ===================== METHOD 3 ===============================

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::apiResources([
        'testamento' => TestamentoController::class,
        'livro' => LivroController::class,
        'versiculo' => VersiculoController::class,
        'idioma' => IdiomaController::class,
        'traducao' => VersiculoController::class,
    ]);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
