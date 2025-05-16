<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

Route::post('/receber-dados', function (Request $request) {
    // Log dos dados recebidos (aparece em storage/logs/laravel.log)
    Log::info('Recebido da API externa:', $request->all());

    // Ou apenas mostrar no navegador
    return response()->json([
        'status' => 'sucesso',
        'mensagem' => 'Dados recebidos com sucesso!',
        'dados_recebidos' => $request->all()
    ]);
});
