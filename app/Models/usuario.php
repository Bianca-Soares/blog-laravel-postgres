<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = 'tb_atleta';
    protected $primaryKey = 'CPF';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CPF',
        'nome',
        'email',
        'senha',
    ];

}