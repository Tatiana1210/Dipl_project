jQuery(document).ready (function() {
'use strict';

jQuery('#send_form').submit (function(event) {
  event.preventDefault();



  //document.querySelector('');
  var username=jQuery('#username');
  var phone_num=jQuery('#phone_num');
  var mail=jQuery('#mail');
  var comment=jQuery('#comment');


  var data={
    username:username,
    phone_num:phone_num,
    mail:mail,
    comment:comment
  };

  data='data='+ JSON.stringify(data);//получили объект и сделали из него строку

console.log('reg');

  jQuery.ajax ({
    url:'/MailRequest/send',
    type: 'post',
    data: data,
    success: function(response) {

      console.log("response", response);
       if (response=='ok') {
         alert ('Упс! Заявка не отправилась. Попробуйте еще раз!');
      }
        else {
      	alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
				jQuery("#send_form").trigger("reset");
			}
    },
    error: function(err) {
      console.log(err);
    }
  });
});
});
