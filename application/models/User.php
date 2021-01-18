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
  private $password;

  function __construct($email,$nameUser,$login,$password = "",$id="")
  {
    $this->id = $id;
    $this->email = $email;
    $this->nameUser = $nameUser;
    $this->login = $login;
    $this->password = $password;
  }

public function get_id()
{
  return $this->id;
}
public function set_id($value)
{
  $this->id = $value;
}

public function get_email()
{
  return $this->email;
}
public function set_email($value)
{
  $this->email = $value;
}
public function get_nameUser()
{
  return $this->nameUser;
}
public function set_nameUser($value)
{
  $this->nameUser = $value;
}
public function get_login()
{
  return $this->login;
}
public function set_login($value)
{
  $this->login = $value;
}
public function set_password($value)
{
  $this->password = $value;
}
public function get_password()
{
  return $this->password;
}
}
?>
