<?php 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$faker = Faker::create();
		$j=2;
		for ($i=0; $i < 30; $i++) { 
			
		$id = \DB::table('users')->insertGetId(array(
			'first_name'=>$faker->firstName,
			'last_name'=>$faker->lastName,
			'email'=>$faker->unique()->email,
			'password'=>\Hash::make('secret'),
			'type'=>'user'
			)

			);


			\DB::table('profiles')->insert(array(
			'user_id'=>($id),
			'bio'=>$faker->paragraph(rand(2,5)),
			'website'=>$faker->url,
			'twitter'=>'http://twitter.com'.$faker->userName,
			'birthdate'=>$faker->date
			)

			);



		}//fin for
	}//fin run 
}



 ?>