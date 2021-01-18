<?php
/**
 *
 */
require_once 'User.php';
class DBXML
{
  private $path_to_xml = null;
  private $data = null;
  private const SECRET = "соль";
  private $xml_content = null;

  function __construct($path_to_xml,$data="")
  {
    $this->path_to_xml = $path_to_xml;
    $this->data = $data;
    $this->xml_content = $this->read_file();
  }

  function read_file()
  {
    if (file_exists($this->path_to_xml)) {
        return simplexml_load_file($this->path_to_xml);
    } else {
        exit('Не удалось открыть файл'.$this->path_to_xml);
    }
  }

  function get_list_users()
  {
    $list = [];
    foreach ($this->xml_content->user as $item) {
        $list[] = new User($item->id,$item->email,$item->nameUser,$item->login);
    }
  }
  function select_user($login)
  {
    foreach ($this->xml_content->user as $item) {
      if ($item->login == $login) {
        return new User($item->id,$item->email,$item->nameUser,$item->login);
      }
    }
  }

  function update_user($value='')
  {
    // code...
  }

  function delete_user($login)
  {
    // code...
  }

  function add_user(User $value)
  {
    // code...
  }

  function checkUser($data){

    foreach ($this->xml_content->user as $item) {
      $decode_password = md5(self::SECRET.$item->password);
      echo "$decode_password</br>";
      if (($item->login === $data['login']) && ($decode_password === $data['password'])) {
        return true;
      }
    }
    return false;
  }

}

 ?>
