<?php namespace App\Http\Requests;


use App\Http\Requests\Request;
use App\User;

class UserRequest extends Request {

	public function getPassword()
	{
		$this->request->parameters['password'];
	}
	public function getConfirmationPassword()
	{
		$this->request->parameters['password'];
	}

	public function rules()
	{
		//return User::$rules;
	}


}
