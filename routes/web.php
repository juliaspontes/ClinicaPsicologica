<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AvaliacaoPsicologicaController;
use App\Http\Controllers\TerapiaController;
use App\Http\Controllers\TratamentoController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\ProblemaController;
use App\Http\Controllers\PrescricaoController;
use App\Http\Controllers\EncaminhamentoController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class, 'index'] )->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource("paciente", PacienteController::class);
    Route::resource("avaliacao", AvaliacaoPsicologicaController::class);
    Route::resource("terapia", TerapiaController::class);
    Route::resource("tratamento", TratamentoController::class);
    Route::resource("diagnostico", DiagnosticoController::class);
    Route::resource("problema", ProblemaController::class);
    Route::resource("prescricao", PrescricaoController::class);
    Route::resource("encaminhamento", EncaminhamentoController::class);
    Route::resource("agendamento", AgendamentoController::class);
});

require __DIR__.'/auth.php';
