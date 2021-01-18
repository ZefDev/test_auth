<?php

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
        return new User($item->email,$item->login,$item->nameUser,$item->password);
      }
    }
  }

  function update_user(User $value)
  {
    foreach ($this->xml_content->user as $item) {
      if ($item->login == $value->get_login()) {
        $item->id = $value->get_id();
        $item->email =$value->get_email();
        $item->nameUser =$value->get_nameUser();
        $this->xml_content->asXML($this->path_to_xml);
        return;
      }
    }
  }

  function delete_user($login)
  {
    // code... unset($seg);
    $index = 0;
    foreach ($this->xml_content->user as $item) {
      if ($item->login == $login) {
        unset($this->xml_content->user[$index]);
        $this->xml_content->asXML($this->path_to_xml);
        return;
      }
      $index++;
    }
  }

  function add_user(User $value)
  {
    if ($this->select_user($value->get_login())) {
      return false;
    }
    $user =$this->xml_content->addChild('user');
    $user->addChild('id', $this->xml_content->users->count());
    $user->addChild('email', $value->get_email());
    $user->addChild('nameUser', $value->get_nameUser());
    $user->addChild('login', $value->get_login());
    $user->addChild('password', md5(self::SECRET.$value->get_password()));
    $this->xml_content->asXML($this->path_to_xml);
    return true;
  }

  function checkUser($data){

    foreach ($this->xml_content->user as $item) {
      $decode_password = md5(self::SECRET.$data['login']);
      echo "$decode_password</br>";
      if (($item->login === $data['login']) && ($decode_password === $data['password'])) {
        return true;
      }
    }
    return false;
  }

}

 ?>
