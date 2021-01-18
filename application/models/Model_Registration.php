<?php
require_once 'DBXML.php';
class Model_Registration extends Model
{
	private $dbxml;
	function __construct()
	{
		  $this->dbxml = new DBXML(getcwd()."\xml\Users.xml");

	}
	public function get_data($login="")
	{
		return array(
				'login' => 'user123',
				'nameUser' => 'Alex Jork',
				'email' => 'alex123@gmail.com',
				'password' => '82ce01b181a9774120098368ea521616', // потом захешіруй Md5(сольUser123@)
		);
	}

	public function add_newUser($data)
	{
		return $this->dbxml->add_user(new User($data['email'],$data['nameUser'],$data['login'],$data['password']));
	}

}
?>
