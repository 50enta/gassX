<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Util extends Model
{
      protected $fillable = [
         'diaLimitePagamento', 
    ];



	
/**
	retorna o mês correspondente ao 
	valor passado por parâmento
*/
public function getMes($mes_int){
	switch ($mes_int) {
		case '1':
			return 'Jan';
			break;
		case '2':
			return 'Fev';
			break;
		case '3':
			return 'Mar';
			break;
		case '4':
			return 'Abr';
			break;
		case '5':
			return 'Mai';
			break;
		case '6':
			return 'Jun';
			break;
		case '7':
			return 'Jul';
			break;
		case '8':
			return 'Ago';
			break;
		case '9':
			return 'Set';
			break;
		case '10':
			return 'Out';
			break;
		case '11':
			return 'Nov';
			break;
		case '12':
			return 'Dez';
			break;
		default:
			return 'Indefinido';
			break;
	}
}
    
}
