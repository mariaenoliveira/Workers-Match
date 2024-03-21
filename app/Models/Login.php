<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Login as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sactum\HasApiTokens;

class Login extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "login";

    protected $fillable = [
        'email',
        'senha',
    ];
}
