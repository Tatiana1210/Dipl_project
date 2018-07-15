function sendForm(ev) {
    ev.preventDefault();

    var form_data = new FormData(this);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", this.action, true);

    oReq.onload = function(oEvent) {

        if (oReq.status == 200) {
            console.log(oReq.responseText);
      /* На этой строчке консоль выдает почему-то это: <!DOCTYPE html>
<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="keywords" content="Language school">
   <meta name="description" content="Сайт школы">
   <title>Регистрация</title>
   <link rel="stylesheet" href="css/main_stl.css">
   <link rel="stylesheet" href="/css/form.css">
   <link rel="stylesheet" href="/css/schedule_calendar.css">
   <link rel="stylesheet" href="/css/reviews.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
   <link rel="stylesheet" href="../../fontAwesome.css">
   <link media= "screen and (max-device-width: 768px)" rel="stylesheet"  href="/css/mobile.css" >
   <link media= "screen and (max-device-width: 1040px)" rel="stylesheet"  href="/css/mobile.css" >
   <script src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7M…*/
            if (oReq.responseText === 'User exists') {
                console.log('Пользователь существует, измените логин');
            } else if (oReq.responseText === 'added'){
                console.log('Пользователь добавлен');
            }
        } else {
            console.log("error!");
        }
    };
    oReq.send(form_data);
}
function addFormsListener() {
      document.getElementById('reg_form').addEventListener('submit', sendForm);

    // for (let i=0; i < document.forms.length;i++){
    //     document.forms[i].addEventListener('submit', sendForm);
    // }
}
addFormsListener();
