$(window).scroll(function() {

    //
    //  Анимация верхнего меню
    //
    if ($(window).scrollTop() > 70) {
        $('#top-menu').addClass('top-menu-non-home');
    } else {
        $('#top-menu').removeClass('top-menu-non-home');
    }
});

//
//  Проверка email
//
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function ajaxPost(id, url){
  let formData = $(id).serialize();
  $.post(url, formData, function(data) { //  передаем и загружаем данные с сервера с помощью HTTP запроса методом POST
      //let obj = $.parseJSON(data);
      return data;
  });
}
//
//  Обработка авторизации пользователя
//
$(document).on('click', '#btn-authenication-user', function(){
  console.log("authenication");
    let login = $('#auth-login');

    console.log(login.html());


  //let resault = ajaxPost('#authenication-form', 'http://eds22.local/api/authenication');




  /*
  let formData = $('#authenication-form').serialize();
  let url = 'http://eds22.local/api/authenication';

  $.post(url, formData, function(data) { //  передаем и загружаем данные с сервера с помощью HTTP запроса методом POST
      let obj = $.parseJSON(data);
      if(obj['resault'] == 'ok'){
          $(location).attr('href','/');
      }
      $('#alert').html("Result: " + data); // вставляем в элемент <div> данные, полученные от сервера
  });*/
});

//
//  Обработка регистрации пользователя
//
$(document).on('click', '#btn-registration-user', function(){
  let value = ajaxPost('#registration-form', 'http://eds22.local/api/registration');

  //if(value['resault'] == 'ok'){
    $('#layout-body').empty();
    $('#layout-body').html('<p>'+value+'</p>');
//  }
});

function dynamicLoadContentPOST(controller, action) {
    let url = "http://eds22.local/api/getcontent";
    $.post(url, 'controller=' + controller + '&action=' + action, function(resault) {
        let obj = $.parseJSON(resault);

        if (obj['result'] == 'ok') {
            let length = Object.keys(obj).length;
            for (let index = 0; index < length - 1; index++)
                $('#content').append(obj[index]["Content"]);
        }
    });
}
