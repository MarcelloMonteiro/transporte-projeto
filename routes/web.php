<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PainelController,
    CategoriaHabilitacaoController,
    TipoVeiculoController,
    MontadoraController,
    ModeloController,
    TipoSituacaoController,
    SituacaoController,
    VeiculoController
};

Auth::routes();

Route::prefix('painel')->middleware('auth')->group(function (){
    Route::get('/', [PainelController::class, 'index'])->name('dashboard');

    Route::resource('categorias-habilitacao', CategoriaHabilitacaoController::class);

    Route::resource('tipos-veiculos', TipoVeiculoController::class);

    Route::resource('montadoras', MontadoraController::class);
    Route::any('montadoras/busca', [MontadoraController::class, 'busca'])->name('montadoras.busca');

    Route::resource('modelos', ModeloController::class);
    Route::any('modelos/busca', [ModeloController::class, 'busca'])->name('modelos.busca');
    Route::post('modelos/montadora', [ModeloController::class, 'listModelos'])->name('modelos.montadora');

    Route::resource('situacoes', SituacaoController::class);
    Route::resource('tipos-situacao', TipoSituacaoController::class);

    Route::resource('veiculos', VeiculoController::class);
    Route::any('veiculos/busca', [VeiculoController::class, 'search']);

});
