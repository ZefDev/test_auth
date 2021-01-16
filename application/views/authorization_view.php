<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon.png">

    <title>Авторизация</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/authorization.js"></script>
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="/Authorization/signin">
      <img class="mb-4" src="img/icon.png" alt="" width="150" height="150">
      <h1 class="h3 mb-3 font-weight-normal">Пожалуйста авторизируйтесь</h1>
      <label for="inputEmail" class="sr-only">Логин</label>
      <input type="text" id="login" class="form-control" placeholder="Логин" value="<?php if (isset($data)) { echo $data['login']; } ?>" required autofocus>
      <label for="inputPassword" class="sr-only">Пароль</label>
      <input type="password" id="password" class="form-control" placeholder="Пароль" value="<?php if (isset($data)){ echo $data['password'];} ?>" required>
      <div class="mb-3">
          Вы ещё не с нами?
      </div>
      <div class="mb-3">
        <a href="/registration">Создать новый акаунт</a>
      </div>
      <button class="btn btn-lg btn-primary btn-block" id="btn_signin" type="submit">Войти</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </body>
</html>
