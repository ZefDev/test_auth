<?php
class Controller_Authorization extends Controller
{
    function __construct()
	  {
		    $this->model = new Model_Authorization();
		    $this->view = new View();
	  }
    function action_index()
    {

      $this->view->generate('authorization_view.php', 'template_view.php');
    }

    function action_signin()
    {
      $data = $this->model->get_data();
      $resultAuth = $this->check_user($data);
      if (gettype($resultAuth)=="array"){
          echo json_encode($resultAuth); // Отправляем ошибки

      }
      else{
        session_start();
        echo json_encode(Array('answer' => true));
      }


		  //$this->view->generate('authorization_view.php', 'template_view.php', $data);
    }

    function check_user($data){
        $login = "";
        $pasword = "";
        $err = [];
        if (isset($_POST['login']) ) {
          $login = $_POST['login'];
        }
        if (isset($_POST['password'])) {
          $pasword = $_POST['password'];
        }
        if ($data['login'] != $_POST['login']) {
            $err += ['login' => "Неверный логин"];
            $err += ['answer' => "false"];
        } elseif($data['password'] != $_POST['password']) {
            $err += ['password' => "Неверный пароль"];
            $err += ['answer' => "false"];
        }

        if (count($err) == 0) {
          return true;
        }
        else{
          return $err;
        }
    }
}
?>
