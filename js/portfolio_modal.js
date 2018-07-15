
      //Массив, в котором содержатся ссылки на изображения
  var imageArray = [

    "img/portfolio01.jpg",
    "img/portfolio02.jpg",
    "img/portfolio03.jpg",
    "img/portfolio04.jpg",
    "img/portfolio05.jpg",
    "img/portfolio06.jpg",
    "img/portfolio07.jpg",
    "img/portfolio08.jpg",
  ];

  window.number = '0';

        //Привязываем количество картинок к размеру массива
  var imageCount = imageArray.length;

  function image(num){

      //Если выбрана следующая картинка
    if(num == 1){

        //Если это последняя картинка, то не увеличиваем счетчик number
      if(number < imageCount - 1){

        number++;

        document.getElementById('images').src = imageArray[number];
        document.getElementById('num_img').innerHTML= number + 1 + '/' + imageCount;
      }
    }
    else{  //Если выбрана предыдущая картинка

          //Если это первая картинка, то не уменьшаем счетчик number
      if(number > 0){

        number--;
        document.getElementById('images').src = imageArray[number];
      }
    }
  }

      //Функция для показа стрелочек
  function btn_show(){

    if(number != 0) document.getElementById('left').style.display='block';
    if(number != imageCount - 1) document.getElementById('right').style.display='block';
  }

      //Функция, которая прекращает показ стрелочек
  function btn_noshow(){

    document.getElementById('left').style.display='none';
    document.getElementById('right').style.display='none';
  }

    //Выводим картинки
  document.write('<img id="images" style="width:1300px;" src="' + imageArray[0] + '">');

  function goClick(){
        setInterval(function(){
         $('#right').trigger('click');
       }, 5000);
  }
goClick();
