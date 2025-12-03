<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormularioDeContacto extends Model
{
    // Define o nome da tabela no banco de dados.
    // O Laravel PLURALIZA o nome da Model.
    // Se a sua migration criou a tabela 'formulario_de_contactos',
    // então esta linha é opcional, mas recomendada:
    protected $table = 'formulario_de_contactos';

    // Lista de campos preenchíveis
    protected $fillable = [
        'nome',
        'email',
        'mensagem',
        // ... (outros campos)
    ];

    // ...
}
