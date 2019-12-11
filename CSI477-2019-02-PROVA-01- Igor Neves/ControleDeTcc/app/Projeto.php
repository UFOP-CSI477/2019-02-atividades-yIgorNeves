<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'aluno_id', 'professor_id','titulo','ano','semestre',
    ];

    public function aluno() {
        return $this->belongsTo('App\Aluno');
    }

    public function professor() {
        return $this->belongsTo('App\Professor');
      }

}
