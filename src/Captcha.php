<?php
namespace Captcha;

class Captcha {

	public $time_life = 5;
	public $numbers = true;
	public $uppers = true;
	public $length = 6;
	function __construct($argument = ['time_life'=>6,'numbers'=>true,'uppers'=>true,'length'=>true])
	{
		$this->time_life = is_integer($argument['time_life'])? $argument['time_life']: 6;
		$this->numbers   = is_bool($argument['time_life'])? $argument['time_life']: true;
		$this->uppers    = is_bool($argument['uppers'])? $argument['uppers']: true;
		$this->length    = is_integer($argument['length'])? $argument['length']: true;

	}
	public function generate(){
		session(['captcha_package' => 'value']);

	}
	public function check($code){
		return session('captcha_package'); 
	}
	static function getCurrentCode(){

	}

	
}