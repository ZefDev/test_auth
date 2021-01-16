<?php
class Controller_Registration extends Controller
{
  function __construct()
  {
        $this->model = new Model_Registration();
      $this->view = new View();
  }
    function action_index()
    {

      $this->view->generate('registration_view.php', 'template_view.php');
    }

    function action_signup()
    {
      $data = $this->model->get_data();
      $resultReg = $this->check_user($data);
      if ($resultReg['answer']){
          session_start();
      }

      echo json_encode($resultReg);
    }

    function action_addNewUser()
    {

    }

    function check_user($data){
        $login = "";
        $nameUser = "";
        $email = "";
        $pasword = "";
        $confirm_password = "";
        $err = [];
        if (isset($_POST['login']) ) {
          $login = $_POST['login'];
        }
        if (isset($_POST['nameUser'])) {
          $nameUser = $_POST['nameUser'];
        }
        if (isset($_POST['email']) ) {
          $email = $_POST['email'];
        }
        if (isset($_POST['password'])) {
          $pasword = $_POST['password'];
        }
        if (isset($_POST['confirm_password'])) {
          $confirm_password = $_POST['confirm_password'];
        }

        if ($data['login'] == $login) {
            $err += ['login' => "Такой логин занят"];
            $err += ['answer' => "false"];
        }elseif($data['email'] == $email) {
            $err += ['email' => "Такой майл занят"];
            $err += ['answer' => "false"];
        }
        elseif($pasword != $confirm_password ) {
            $err += ['confirm_password' => "Пароли не совпадают"];
            $err += ['answer' => "false"];
        }

        if (count($err) == 0) {
          return Array('answer' => true);
        }
        else{
          return $err;
        }
    }
}
?>
