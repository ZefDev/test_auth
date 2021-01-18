$(function() {
      $('form').submit(function(e) {
        var $form = $(this);

        $.ajax({
          type: "POST",
          url: $form.attr('action'),
          data: { login: $("#login").val(), password: $("#password").val() }
        }).done(function(result) {
          alert(result);
          var dd = JSON.parse(result);

          if (dd.answer == true) {
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
