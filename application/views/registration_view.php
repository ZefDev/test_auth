<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon.png">

    <title>Форма регистрации</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template <script src="js/jquery-3.5.1.js"></script>   <script src='js/registration.js'></script> -->
    <link href="css/form-validation.css" rel="stylesheet">

    <script src="js/jquery-3.5.1.js"></script>


  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/icon.png" alt="" width="150" height="150">
        <h2>Форма регистрации</h2>
        <p class="lead">Заполните поля</p>
      </div>

      <div class="row">
        <div class="col-md-2 order-md-1"></div>
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" id="regform" action="/Registration/signup"  method="post" onsubmit='return false;' novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="login">Логин</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="" value="" pattern="[A-Za-zА-Яа-яЁё0-9]{6,}" required>
                <div class="invalid-feedback">
                  Поле обязательно для заполнения.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="nameUser">Имя</label>
                <input type="text" class="form-control" id="nameUser" name="nameUser"  placeholder="" value=""  pattern="[A-Za-zА-Яа-яЁё0-9]{6,}" required>
                <div class="invalid-feedback">
                  Поле обязательно для заполнения.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Электронная почта введена не корректно.
              </div>
            </div>

            <div class="mb-3">
              <label for="password">Пароль</label>
              <input type="text" class="form-control" id="password"  name="password" placeholder="" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^\w\s]).{6,}" required>
              <div class="invalid-feedback">
                Введите пароль.
              </div>
            </div>

            <div class="mb-3">
              <label for="confirm_password">Подтвердите пароль </label>
              <input type="text" class="form-control" id="confirm_password" name="confirm_password" placeholder="" required>
              <div class="invalid-feedback">
                Введите пароль.
              </div>
            </div>


            <button class="btn btn-primary btn-lg btn-block" type="submit">Зарегистрироваться</button>
          </form>
        </div>
        <div class="col-md-2 order-md-1"></div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>

    <script>
    
    </script>
  </body>
</html>
