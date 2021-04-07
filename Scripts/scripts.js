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

//
//  Отправка ajax post запрос
//
function ajaxPost(id, url){
  let formData = $(id).serialize();
  let resault = '';
  $.post(url, formData, function(data) { //  передаем и загружаем данные с сервера с помощью HTTP запроса методом POST

      resault = data;
  });
}

//
//  Проверка на соответствие формату json
//
function checkJsonFormat(value){
  let json;
  try{
    json = $.parseJSON(value);
  }
  catch(ex){
    return false;
  }
  return {'resault':true, 'content': json};
}
//
//  Обработка авторизации пользователя
//
$(document).on('click', '#btn-authenication-user', function(){

    // Проверка введенных данных
    let login = $('#auth-login').val().length;
    let password = $('#auth-password').val().length;
    let error = false;


    if(!checkEmptyInputForm('#authenication-form')){
      if(login < 5){
        $('#empty-login').css({'display': 'block'});
        error = true;
      }
      else{
        $('#empty-login').css({'display': 'none'});
      }

      if(password < 5){
        error = true;
        $('#empty-password').css({'display': 'block'});
      }
      else{
        $('#empty-password').css({'display': 'none'});
      }

      login = password = display = undefined;

      if(!error){
        let url  = 'http://eds22.local/api/authenication';
        let formData = $('#authenication-form').serialize();
        $.post(url, formData, function(ajax) { //  передаем и загружаем данные с сервера с помощью HTTP запроса методом POST
          let value = checkJsonFormat(ajax);
          if(value['resault']){
            ajax = value['content'];
            if(ajax['resault'] == 'ok'){
                $(location).attr('href','/private/account');
                console.log('oops');
            }
            else {
              $('#alert').text(ajax['resault']);
              $('#alert').css({'display': 'block'});
              setTimeout(function(){
                $('#alert').css({'display': 'none'});
              }, 5000);
            }
          }
        });
      }
    }

/*

    if(login < 5){
      $('#empty-login').css({'display': 'block'});
      error = true;
    }
    else {
      $('#empty-login').css({'display': 'none'});
    }

    if(password < 5){
      error = true;
      $('#empty-password').css({'display': 'block'});
    }
    else{
      $('#empty-password').css({'display': 'none'});
    }
    login = password = display = undefined;

    if(!error){
      let url  = 'http://eds22.local/api/authenication';
      let formData = $('#authenication-form').serialize();
      $.post(url, formData, function(ajax) { //  передаем и загружаем данные с сервера с помощью HTTP запроса методом POST
        let value = checkJsonFormat(ajax);
        if(value['resault']){
          ajax = value['content'];
          if(ajax['resault'] == 'ok'){
              $(location).attr('href','/private/account');
              console.log('oops');
          }
          else {
            console.log('error check');
          }
        }
      });
    }*/
});

//
//  Проверка всех input на пустоту
//
function checkEmptyInputForm(id){
  let fields = $(id).serializeArray();
  let error = false;

  for(let index=0; index < fields.length; index++){
    $emptyLabel = $(id+' #labelEmpty'+index);

    if(fields[index].value){
      $emptyLabel.css({ 'display': 'none'});
    }
    else{
      error = true;
      $emptyLabel.css({ 'display': 'block'});
    }
  }
  return error;
}


//
//  Обработка регистрации пользователя
//
$(document).on('click', '#btn-registration-user', function(){
  checkEmptyInputForm('#registration-form');
  //let value = ajaxPost('#registration-form', 'http://eds22.local/api/registration');

  //if(value['resault'] == 'ok'){
  //  $('#layout-body').empty();
  //  $('#layout-body').html('<p>'+value+'</p>');
//  }
});

function dynamicLoadContentPOST(controller, action) {
    let url = "http://eds22.local/api/getcontent";
    $.post(url, 'controller=' + controller + '&action=' + action, function(resault) {
      if(checkJsonFormat(resault)){
        let obj = $.parseJSON(resault);

        if (obj['result'] == 'ok') {
            let length = Object.keys(obj).length;
            for (let index = 0; index < length - 1; index++)
                $('#content').append(obj[index]["Content"]);
        }
      }
    });
}
