<?php
class Model_Registration extends Model
{
	public function get_data()
	{
		return array(
				'login' => 'user123',
				'nameUser' => 'Alex Jork',
				'email' => 'alex123@gmail.com',
				'password' => '82ce01b181a9774120098368ea521616', // потом захешіруй Md5(сольUser123@)
		);
	}

	public function add_newUser()
	{
		$secret = "соль"; // Секретное слово
 		$password = "123"; // Пароль
 		echo md5($password.$secret); // Результат хэширования
	}

}
?>
