<?php namespace App\Http\Controllers;


class UsersController extends Controller {


	public function getIndex()
	{
		$result= \DB::table('users')
		->select('user_profiles.bio as biografia','first-name')
		->where('users.id','<',10)
		->orderBy('first-name','DESC')
		->leftjoin('user_profiles','users.id','=','user_profiles.user_id')
		->get();
		dd($result);
		return ($result);

	}


}


 ?>