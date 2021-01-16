<?php
class Model_Registration extends Model
{
	public function get_data()
	{
		return array(
				'login' => 'user123',
				'nameUser' => 'Alex Jork',
				'email' => 'alex123@gmail.com',
				'password' => 'user123A@', // потом захешіруй
		);
	}
	/*
	public function add_newUser()
	{
		return array(
				'answer' => true
		);
	} */

}
?>
