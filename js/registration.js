$(function() {
      $('form').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: "POST",
          url: $form.attr('action'),
          data: { login: $("#login").val(), nameUser: $("#nameUser").val(),  email: $("#email").val(), password: $("#password").val(), confirm_password: $("#confirm_password").val() }
        }).done(function(result) {
          var dd = JSON.parse(result);
          if (dd.answer == true) {
            alert(dd);
            $(location).attr('href', '/main')
          }
          else{
            alert("errors");
          }
        }).fail(function() {
          console.log('fail');
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault();
      });
    });
