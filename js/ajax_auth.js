jQuery(document).ready (function() {
'use strict';

jQuery('#auth_form').submit (function(event) {
  event.preventDefault();

  var login=jQuery('#login');
  var password=jQuery('#password');


  var data={
    login:login,
    password: password
  };

  data='data='+ JSON.stringify(data);//получили объект и сделали из него строку

console.log('auth');

  jQuery.ajax ({
    url:'/Account/auth',
    type: 'post',
    data: data,
    success: function(response) {
    console.log("response",response);
    if (response == 'ON') {
    console.log('Пользователь авторизован');
    return true;
    }
    else if (response == 'OFF') {
    console.log ('Пользователя не существует. Пожалуйста пройдите этап регистрации.');
    return false;
      }

    },
    error: function(err) {
      console.log(err);
    }
  });
});
});
