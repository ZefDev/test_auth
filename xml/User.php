<?php
/**
 *
 */
class User
{
  private $id;
  private $email;
  private $nameUser;
  private $login;

  function __construct($id,$email,$nameUser,$login)
  {
    $this->id = $id;
    $this->email = $email;
    $this->nameUser = $nameUser;
    $this->login = $login;
  }

public function get_id()
{
  return $id;
}
public function set_id($value)
{
  $this->id = $value;
}

public function get_email()
{
  return $email;
}
public function set_email($value)
{
  $this->email = $value;
}
public function get_nameUser()
{
  return $nameUser;
}
public function set_nameUser($value)
{
  $this->nameUser = $value;
}
public function get_login()
{
  return $login;
}
public function set_login($value)
{
  $this->login = $value;
}
?>
