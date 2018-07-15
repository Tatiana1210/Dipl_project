//
//(function () {
//    'use strict';
////console.log("localstorage");

var user_answ = JSON.parse(localStorage.getItem('user_answ'));
if (!user_answ){
  user_answ = {};
}

//function Ls(){
//      if (localStorage.getItem('user_answ') != null) {
//         var user_result;
//         user_result= JSON.parse(localStorage.getItem('user_answ'));
//         return user_result;
//        console.log(user_result);
//      }
//  }

  // jQuery(document).ready (function() {
  // 'use strict';


jQuery('#eng_test').submit (function(event) {
    event.preventDefault(); /* prevent form submiting here */
    jQuery.ajax({
      type: 'POST',
    dataType: 'json',
    url: '/TestLevel/englishResult',
    data: {data: localStorage.getItem('user_answ')},
     success: function(user_answ) {
      console.log(user_answ);
    }
    });
});


    //var answerStorage = localStorage;
    $('input[type=checkbox]').each(function(){
        $(this).change(function() {
            if($(this).is(":checked")) {
              console.log($('#qw').text());
                console.log(user_answ);
              user_answ[$('#qw').text()] = $(this).val();
              localStorage.setItem('user_answ', JSON.stringify(user_answ));
                //console.log("добавить в хранилище", $(this).val());
                //answerStorage.setItem($('#qw').text(),$(this).val());
                // console.log("after add", answerStorage);
            } //else {
                // удалять, если возможен только один вариант ответа,
                // если больше, то нужно сохранять ответы массивом
                // console.log("удалить из хранилища");
                //answerStorage.removeItem($('#qw').text());
                // console.log("after remove", answerStorage);
            //}
        });
    });
