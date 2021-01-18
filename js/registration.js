
  (function() {
    'use strict';

    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');

      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          else{
          $('form').submit(function(e) {
            var $form = $(this);
            $.ajax({
              type: "POST",
              url: "/Registration/signup",
              data: { login: $("#login").val(), nameUser: $("#nameUser").val(),  email: $("#email").val(), password: $("#password").val(), confirm_password: $("#confirm_password").val() }
            }).done(function(result) {
              var dd = JSON.parse(result);

              if (dd.answer == true) {
                $(location).attr('href', '/main');
              }
              else{
              }
            });
            e.preventDefault();
          });
          }

          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();  
