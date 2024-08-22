<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Usuario extends Authenticatable
{
    use Notifiable, HasFactory;
    protected $fillable = [
        'nome', 'email', 'password', 'tipo', 'cnpj'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    //criacao das relacoes de tabela
}
