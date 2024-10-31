<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        $pacientesId = $pacientes->pluck('id');
        $agendamento = Agendamento::whereIn('paciente_id', $pacientesId)
        ->whereBetween('data_agendamento', [now()->startOfWeek(), now()->endOfWeek()])
        ->get();
        return view("dashboard", compact('agendamento'));  
    }
}