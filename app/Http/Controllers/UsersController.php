<?php namespace App\Http\Controllers;

use App\User;
use App\Profile;
class UsersController extends Controller {


	public function getIndex()
	{
		$result= \DB::table('users')
		->select('user_profiles.bio as biografia','user_profiles.birthdate','first-name')
		->where('users.id','<',10)
		->orderBy('first-name','DESC')
		->leftjoin('user_profiles','users.id','=','user_profiles.user_id')
		->get();
		dd($result);
		return ($result);

	}

	public function getOrm()
	{
		$user= User::find(2);
		//foreach ($result as $us) {

		//	$us->full_named = $us->full_name();
		//}
		dd($user->profiles());
	}

	public function getName()
	{
			$hola;
		return view('prueba',compact('hola'));

	}


}


 ?>