<?php
require_once 'DBXML.php';

class Model_Authorization extends Model
{
	public $dbxml;
	function __construct()
	{
			 $this->dbxml = new DBXML(getcwd()."\xml\Users.xml");

	}
	public function get_data($login="")
	{
		$result = $this->dbxml->select_user($login);
		if($result){
			return array(
					'login' => $result->get_nameUser(),
					'password' =>$result->get_password(),
			);
		}
		else {
			return false;
		}
	}
}
?>
