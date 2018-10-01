<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Atividade;
use App\User;

class Mensagem extends Model
{
    protected $table = 'mensagens';

    	public function atividade(){

    		return $this->belongsTo(Atividade::class);

    	}

    	public function user(){

    		return $this->belongsTo(User::class);

    	}
}
