<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;

//visualizar as páginas
Route::get('/', [EventosController::class, 'MostrarHome'])->name('home-adm');
Route::get('/cadastro-evento', [EventosController::class, 'MostrarCadastroEvento'])->name('show-cadastra-evento');
Route::get('/lista-evento', [EventosController::class, 'MostrarEventoNome'])->name('lista-evento');
Route::get('/altera-evento/{id}', [EventosController::class, 'MostrarEventoCodigo'])->name('show-altera-evento');

//cadastrar
Route::post('/cadastro-evento', [EventosController::class, 'CadastrarEventos'])->name('cadastra-evento');

//deletar
Route::delete('/apaga-evento/{id}', [EventosController::class, 'Destroy'])->name('apaga-evento');

//alterar
Route::put('/altera-evento/{id}', [EventosController::class, 'Update'])->name('altera-evento');


