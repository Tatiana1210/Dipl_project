jQuery(document).ready (function() {
'use strict';

jQuery('#review_form').submit (function(event) {
  event.preventDefault();

  var full_name=jQuery('#full_name');
	var review_text=jQuery('#review_text');
	var date_time=jQuery('#date_time');


  var data={
    full_name:full_name,
    review_text:review_text,
		date_time:date_time
  };

  data='data='+ JSON.stringify(data);//получили объект и сделали из него строку

console.log('auth');

  jQuery.ajax ({
    url:'/Reviews/add',
    type: 'post',
    data: data,
    success: function(response) {
    console.log("response",response);
    if (response == 'add') {
    console.log('Отзыв успешно добавлен');
    return true;
    }
    else if (response == 'not add') {
    console.log ('Отзыв не добавлен');
    return false;
      }

    },
    error: function(err) {
      console.log(err);
    }
  });
});
});
