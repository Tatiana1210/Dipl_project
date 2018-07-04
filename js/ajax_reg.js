jQuery(document).ready (function() {
'use strict';

jQuery('#reg_form').submit (function(event) {
  event.preventDefault();



  //document.querySelector('');
  var username=jQuery('#username');
  var gender=jQuery('#gender');
  var age=jQuery('#age');
  var tel=jQuery('#tel');
  var city=jQuery('#citySelector');
  var email=jQuery('#email');
  var login=jQuery('#login');
  var password=jQuery('#password');


  var data={
    username:username,
    gender:gender,
    age:age,
    tel:tel,
    city:city,
    email:email,
    login:login,
    password: password
  };

  data='data='+ JSON.stringify(data);//получили объект и сделали из него строку

console.log('reg');

  jQuery.ajax ({
    url:'/Account/process_registration',
    type: 'post',
    data: data,
    success: function(response) {
    console.log("response",response);
    if (response == 'added') {
    console.log('Пользователь добавлен');
    return true;
    }
    else if (response == 'User exists') {
    console.log ('Пользователь существует');
    return false;
      }

    },
    error: function(err) {
      console.log(err);
    }
  });
});
});
