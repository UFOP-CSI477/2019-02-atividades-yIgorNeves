<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'name', 'curso',
    ];

    public function projetos() {
        return $this->hasMany('App\Projeto');
      }
}
