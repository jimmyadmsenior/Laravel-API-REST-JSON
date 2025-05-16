<?php

use Illuminate\Http\Request;
use App\Models\Paciente;
use Illuminate\Support\Facades\Log;

Route::post('/receber-dados', function (Request $request) {
    $dados = $request->input('pacientes');

    foreach ($dados as $item) {
        Paciente::create([
            'nome' => $item['nome'] ?? $item['nome_completo'] ?? '',
            'cpf' => $item['cpf'] ?? $item['documento'] ?? '',
            'email' => $item['email'] ?? $item['contato'] ?? '',
            'idade' => $item['idade'] ?? 0,
        ]);
    }

    return response()->json([
        'status' => 'sucesso',
        'mensagem' => 'Pacientes salvos no banco SQLite!',
    ]);
});
