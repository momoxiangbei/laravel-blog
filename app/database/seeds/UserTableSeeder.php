<?php
class UserTableSeeder extends Seeder {
public function run(){
	User::create(array(
		'username' =>'admin',
		'password' => Hash::make('15246929893'),
		'is_admin' => true
		));
	User::create(array(
		'username' => '墨墨向北',
		'is_admin' => false
		));
}
}