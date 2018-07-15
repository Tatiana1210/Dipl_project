<link rel="stylesheet" href="css/portf_wraper.css">
<section class="portfolio">
         <div class="portfol">
              <h3 class="portfol"> Посмотри как здесь здрово! </h3>
        </div>
        <nav>
              <ul class="portfolio">
                   <li class="portfolio"> <a href="/portfolio" class="portf"> Смотреть все </a> </li>
                   <li class="portfolio"> <a href="" class="portf" > Аудитории </a>  </li>
                   <li class="portfolio"> <a href="" class="portf"> Открытые мероприятия </a> </li>
             </ul>
       </nav>
    <div class="portfolio_container">
      <script type="text/javascript">
      function randomPicture() {
       var randomIndex=Math.floor((Math.random()*8));
       var imageArray = [

         "'img/portfolio01.jpg'",
         "'img/portfolio02.jpg'",
         "'img/portfolio03.jpg'",
         "'img/portfolio04.jpg'",
         "'img/portfolio05.jpg'",
         "'img/portfolio06.jpg'",
         "'img/portfolio07.jpg'",
         "'img/portfolio08.jpg'",
       ];
       return imageArray[randomIndex];
      };

    var div1=document.getElementById('item1');
    var img1 = document.createElement('img');
    img1.setAttribute("src", setInterval(randomPicture(), 1000));
    img1.style.width='100px';
    div1.appendChild(img1);
      </script>

      <div class="photo-gallery">
          <div class="photo-gallery_item" id="item1"> </div>
           <div class="photo-gallery_item" id="item2"> </div>
          <div class="photo-gallery_item" id="item3"> </div>
          <div class="photo-gallery_item" id="item4"> </div>
      <div class="photo-gallery_item">
            <img class="img_photo-gallery_item" src="img/portfolio05.jpg" onclick="openPic()"> </div>
      </div>
      <div id="portfolio_modal">
      	<div onMouseOver="btn_show()" onMouseOut="btn_noshow()" class="wrapper">
          <script src="js/portfolio_modal.js"></script>

      						<!-- Стрелочка влево -->
      		<div id="left" onclick="image(0)" class="left_right"><img src="/img/back.png"></div>

      						<!-- Стрелочка вправо -->
      		<div id="right" onclick="image(1)" class="left_right" style="margin-left:68rem; position: absolute; display: none;"><img src="/img/go.png"></div>

        	</div>
        <center><p style="font-size: 18px;color: #333;font-weight: bold;" id="num_img"></p></center>
        <center><button class="go_back" onclick="image(0)">Back</span> <button class="go_back"  onclick="image(1)">Next</span></center>
      </div>
</section>
