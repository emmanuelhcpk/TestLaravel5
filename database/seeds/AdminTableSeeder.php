<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->insert(array(
			'first-name'=>'Emma',
			'last-name'=>'Velez',
			'email'=>'eava@gmail.com',
			'password'=>\Hash::make('secret'),
			'type'=>'admin'
			)

			);
	}

}
 ?>