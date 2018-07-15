// 
// (function () {
//     'use strict';
//     var form = document.getElementById('form');
//     form.addEventListener('submit', submitForm);
//
//     function submitForm(event) {
//         event.preventDefault();
//         if(validate()) {
//         form.submit();// здесь написано (https://learn.javascript.ru/forms-submit), что это должно работать, но консоль ругается((
//         }
//     }
//  function validate(){
//      let username=document.getElementById('f1').value;
//      let email=document.getElementById('email').value;
//      let age=document.getElementById('age').value;
//      let tel=document.getElementById('tel').value;
//      let paswd=document.getElementById('password').value;
//      let regEmail=/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
//      let regPaswd=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
//      //let regTel=/^+\d{1,3}\s?\(\d{3}\)\s?\d{3}(-\d{2}){2}$/;
//      let fail;
//      if (regEmail.test(email)===false) {
//       fail='Адрес эл. почты введен не правильно!';
//       alert(fail);
//       return false;
//      }
//      else if (regPaswd.test(paswd)===false) {
//         fail='Пароль введен не правильно! Пароль должен быть не менее 8 символов и иметь хотя бы одну цифру и букву в верхнем и нижнем регистре.';
//           alert(fail);
//           return false;
//      }
//      // else if (regPaswd.test(tel)===false){
//      //  fail='Телефон введен не правильно!';
//      //      alert(fail);
//      //      return false;
//      // }
//      else {
//       return true;
//      }
// }
// }());
