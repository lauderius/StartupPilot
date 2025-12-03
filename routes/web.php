// routes/web.php

// Rota GET para mostrar o formulário
Route::get('/contacto', function () {
    // TEM DE SER 'contacto', que o Laravel procura por 'contacto.blade.php'
    return view('contacto');
})->name('contacto.view');

// Rota POST para processar a submissão
Route::post('/contacto', [FormularioDeContactoController::class, 'store'])->name('contacto.store');
