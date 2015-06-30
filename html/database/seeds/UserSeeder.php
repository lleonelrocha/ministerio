<?php
use App\User;

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

			$faker=Faker::create();

			for($i=0; $i<100; $i++)
			{
				\DB::table('users')->insert(array(
				'firstName'=>$faker->firstName,
				'lastName'=>$faker->firstName,
				'email'=> $faker->unique()->email,
				'password'=>Hash::make('123456'),
				'phoneNumber'=>$faker->phoneNumber,
				'country'=>$faker->country,
				'state'=>$faker->state,
			    'id_profile'=>'1',
                    'estado'=>'active',
				'imageUrl'=>$faker->imageUrl($width = 250, $height = 150)
				)); 
			}
	}

}
