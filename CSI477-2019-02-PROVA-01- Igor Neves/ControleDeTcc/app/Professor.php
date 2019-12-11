<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'name', 'area',
    ];

    public function projetos() {
        return $this->hasMany('App\Projeto');
      }
}
