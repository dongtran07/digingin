<?php
/**
* 
*/
class UsersTableSeeder extends Seeder
{
	
	function run()
	{
		
		User::truncate();
		User::create([
				'username'	=>	'dongtm12',
				'email'		=>	'dong.tm1212@gmail.com',
				'password'	=>	'1234'
			]);
		User::create([
				'username'	=>	'dongak.tm12',
				'email'		=>	'dg.tm1212@gmail.com',
				'password'	=>	'123456'
			]);
	}
}
?>