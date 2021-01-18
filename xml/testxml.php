<?php
require 'DBXML.php';
$xml = "Users.xml";
$data = array('login' => 'user123', 'password' => 'User123@' );
$dbxml = new DBXML($xml);

if($dbxml->checkUser($data)){
  echo "авторизация успешна";
}
else {
  echo "авторизация неуспешна";
}

    //checkUser($xml,$arrayName);
    /*$users = new SimpleXMLElement($xml);

    $user = $users->addChild('user');
    $user->addChild('id', count($users->user));
    $user->addChild('email', );
    $user->addChild('nameUser', );
    $user->addChild('login', );

    echo $users->asXML();

function checkUser($xml,$arrayName){
  foreach ($xml->user as $item) {
    echo $item->login;
    echo $item->password;
  }
}*/


?>
