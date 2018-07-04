jQuery(document).ready (function() {
'use strict';

jQuery('#form').submit (function(event) {
  event.preventDefault();



  //document.querySelector('');
  var ans1=jQuery('#answer1');
  var ans2=jQuery('#answer1');
  var ans3=jQuery('#answer1');
  var ans4=jQuery('#answer1');



  var data={
    username:username,
    gender:gender,
    age:age,
    tel:tel,
    city:city,
    email:email,
    password: password
  };

  data='data='+ JSON.stringify(data);//получили объект и сделали из него строку

console.log('reg');

  jQuery.ajax ({
    url:'\Account\auth',
    type: 'post',
    data: data,
    success: function(response) {
      console.log("response",response);
      if (response !== 'is_data_in_file') {
        console.log('пользователь существует');
      }
      else if (response !== 'add') {
        console.log('пользователь добавлен');
      }
    },
    error: function(err) {
      console.log(err);
    }
  });
});
});
