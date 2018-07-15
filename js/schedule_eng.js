
 var LevelA1 = {
   level: "Уровень А1",
   colorIfpress: "yellow",
   colorIfnotpress: "pink",
   startDate:["6 июля", "10 июля", "1 августа"],
   days:["ПН","ВТ","CР","ЧТ","ПТ","CБ"],
   time:["9.00-12.15", "19.00-22.15"],
   details: "Летний интенсивный курс| 60 академических часов|",
   duration:["4 недели","5 недель","8 недель"],
   price:["12 000 руб", "15 000 руб"],
   total: function () {

        let buttonA1= document.getElementById('buttonA1');
        buttonA1.style.backgroundColor =this.colorIfpress;
        let buttonA2= document.getElementById('buttonA2');
        buttonA2.style.backgroundColor =this.colorIfnotpress;
        let buttonB1= document.getElementById('buttonB1');
        buttonB1.style.backgroundColor =this.colorIfnotpress;
        let buttonB2= document.getElementById('buttonB2');
        buttonB2.style.backgroundColor =this.colorIfnotpress;
        let buttonC1= document.getElementById('buttonC1');
        buttonC1.style.backgroundColor =this.colorIfnotpress;

        let row1_col1= document.getElementById('row1_col1');
        row1_col1.innerHTML = "<span>"+ this.startDate[0]+"</span>";
        row1_col1.style.color = "black";

        let row1_col2= document.getElementById('row1_col2');
        row1_col2.innerHTML = "<span>"+this.days[0] + ","+ this.days[1]+ ","+  this.days[2] + ","+ this.days[3]+"</span>" ;
        row1_col2.style.color = "black";

        let row1_col3= document.getElementById('row1_col3');
        row1_col3.innerHTML = "<span>"+ this.time[0] + "</span>";
        row1_col3.style.color = "black";

        let row1_col4= document.getElementById('row1_col4');
        row1_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[0] + "|цена-" + this.price[0]+"</span>";
        row1_col4.style.color = "black";

        let row2_col1= document.getElementById('row2_col1');
        row2_col1.innerHTML = "<span>"+ this.startDate[1]+"</span>";
        row2_col1.style.color = "black";

        let row2_col2= document.getElementById('row2_col2');
        row2_col2.innerHTML = "<span>"+this.days[0] + ","+  this.days[2] + ","+ this.days[4]+"</span>" ;
        row2_col2.style.color = "black";

        let row2_col3= document.getElementById('row2_col3');
        row2_col3.innerHTML = "<span>"+ this.time[0] + "</span>";
        row2_col3.style.color = "black";

        let row2_col4= document.getElementById('row2_col4');
        row2_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[1] + "|цена-" + this.price[0]+"</span>";
        row2_col4.style.color = "black";

        let row3_col1= document.getElementById('row3_col1');
        row3_col1.innerHTML = "<span>"+ this.startDate[2]+"</span>";
        row3_col1.style.color = "black";

        let row3_col2= document.getElementById('row3_col2');
        row3_col2.innerHTML = "<span>"+this.days[0] + ","+  this.days[2] + ","+ this.days[4]+"</span>" ;
        row3_col2.style.color = "black";

        let row3_col3= document.getElementById('row3_col3');
        row3_col3.innerHTML = "<span>"+ this.time[1] + "</span>";
        row3_col3.style.color = "black";

        let row3_col4= document.getElementById('row3_col4');
        row3_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[1] + "|цена-" + this.price[1]+"</span>";
        row3_col4.style.color = "black";
    }
    };

    var LevelA2 = {
      level: "Уровень А2",
      colorIfpress: "yellow",
      colorIfnotpress: "pink",
      startDate:["1 июля", "14 июля", "29 июля"],
      days:["ПН","ВТ","CР","ЧТ","ПТ","CБ"],
      time:["9.00-12.15", "19.00-22.15"],
      details: "Летний интенсивный курс| 60 академических часов|",
      duration:["4 недели","5 недель","8 недель"],
      price:["12 000 руб", "15 000 руб"],
      total: function () {

           let buttonA2= document.getElementById('buttonA2');
           buttonA2.style.backgroundColor =this.colorIfpress;
           let buttonA1= document.getElementById('buttonA1');
           buttonA1.style.backgroundColor =this.colorIfnotpress;
           let buttonB1= document.getElementById('buttonB1');
           buttonB1.style.backgroundColor =this.colorIfnotpress;
           let buttonB2= document.getElementById('buttonB2');
           buttonB2.style.backgroundColor =this.colorIfnotpress;
           let buttonC1= document.getElementById('buttonC1');
           buttonC1.style.backgroundColor =this.colorIfnotpress;

           let row1_col1= document.getElementById('row1_col1');
           row1_col1.innerHTML = "<span>"+ this.startDate[0]+"</span>";
           row1_col1.style.color = "black";

           let row1_col2= document.getElementById('row1_col2');
           row1_col2.innerHTML = "<span>"+ this.days[1]+ ","+ this.days[3]+"</span>" ;
           row1_col2.style.color = "black";

           let row1_col3= document.getElementById('row1_col3');
           row1_col3.innerHTML = "<span>"+ this.time[1] + "</span>";
           row1_col3.style.color = "black";

           let row1_col4= document.getElementById('row1_col4');
           row1_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[2] + "|цена-" + this.price[1]+"</span>";
           row1_col4.style.color = "black";

           let row2_col1= document.getElementById('row2_col1');
           row2_col1.innerHTML = "<span>"+ this.startDate[1]+"</span>";
           row2_col1.style.color = "black";

           let row2_col2= document.getElementById('row2_col2');
           row2_col2.innerHTML = "<span>"+this.days[0] + ","+  this.days[2] + ","+ this.days[4]+"</span>" ;
           row2_col2.style.color = "black";

           let row2_col3= document.getElementById('row2_col3');
           row2_col3.innerHTML = "<span>"+ this.time[0] + "</span>";
           row2_col3.style.color = "black";

           let row2_col4= document.getElementById('row2_col4');
           row2_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[1] + "|цена-" + this.price[0]+"</span>";
           row2_col4.style.color = "black";

           let row3_col1= document.getElementById('row3_col1');
           row3_col1.innerHTML = "<span>"+ this.startDate[2]+"</span>";
           row3_col1.style.color = "black";

           let row3_col2= document.getElementById('row3_col2');
           row3_col2.innerHTML = "<span>"+this.days[0] + ","+  this.days[2] + ","+ this.days[4]+"</span>" ;
           row3_col2.style.color = "black";

           let row3_col3= document.getElementById('row3_col3');
           row3_col3.innerHTML = "<span>"+ this.time[1] + "</span>";
           row3_col3.style.color = "black";

           let row3_col4= document.getElementById('row3_col4');
           row3_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[1] + "|цена-" + this.price[1]+"</span>";
           row3_col4.style.color = "black";
       }
       };


       var LevelB1 = {
         level: "Уровень В1",
         colorIfpress: "yellow",
         colorIfnotpress: "pink",
         startDate:["27 июня", "7 июля", "24 июля"],
         days:["ПН","ВТ","CР","ЧТ","ПТ","CБ"],
         time:["9.00-12.15", "19.00-22.15"],
         details: "Летний интенсивный курс| 60 академических часов|",
         duration:["4 недели","5 недель","8 недель"],
         price:["12 000 руб", "15 000 руб"],
         total: function () {

              let buttonB1= document.getElementById('buttonB1');
              buttonB1.style.backgroundColor =this.colorIfpress;
              let buttonA1= document.getElementById('buttonA1');
              buttonA1.style.backgroundColor=this.colorIfnotpress;
              let buttonA2= document.getElementById('buttonA2');
              buttonA2.style.backgroundColor=this.colorIfnotpress;
              let buttonB2= document.getElementById('buttonB2');
              buttonB2.style.backgroundColor=this.colorIfnotpress;
              let buttonC1= document.getElementById('buttonC1');
              buttonC1.style.backgroundColor=this.colorIfnotpress;

              let row1_col1= document.getElementById('row1_col1');
              row1_col1.innerHTML = "<span>"+ this.startDate[0]+"</span>";
              row1_col1.style.color = "black";

              let row1_col2= document.getElementById('row1_col2');
              row1_col2.innerHTML = "<span>"+ this.days[1]+ ","+ this.days[3]+"</span>" ;
              row1_col2.style.color = "black";

              let row1_col3= document.getElementById('row1_col3');
              row1_col3.innerHTML = "<span>"+ this.time[1] + "</span>";
              row1_col3.style.color = "black";

              let row1_col4= document.getElementById('row1_col4');
              row1_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[2] + "|цена-" + this.price[1]+"</span>";
              row1_col4.style.color = "black";

              let row2_col1= document.getElementById('row2_col1');
              row2_col1.innerHTML = "<span>"+ this.startDate[1]+"</span>";
              row2_col1.style.color = "black";

              let row2_col2= document.getElementById('row2_col2');
              row2_col2.innerHTML = "<span>"+this.days[0] + ","+  this.days[2] + ","+ this.days[4]+"</span>" ;
              row2_col2.style.color = "black";

              let row2_col3= document.getElementById('row2_col3');
              row2_col3.innerHTML = "<span>"+ this.time[1] + "</span>";
              row2_col3.style.color = "black";

              let row2_col4= document.getElementById('row2_col4');
              row2_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[1] + "|цена-" + this.price[1]+"</span>";
              row2_col4.style.color = "black";

              let row3_col1= document.getElementById('row3_col1');
              row3_col1.innerHTML = "<span>"+ this.startDate[2]+"</span>";
              row3_col1.style.color = "black";

              let row3_col2= document.getElementById('row3_col2');
              row3_col2.innerHTML = "<span>"+this.days[0] + ","+  this.days[2] + ","+ this.days[4]+"</span>" ;
              row3_col2.style.color = "black";

              let row3_col3= document.getElementById('row3_col3');
              row3_col3.innerHTML = "<span>"+ this.time[0] + "</span>";
              row3_col3.style.color = "black";

              let row3_col4= document.getElementById('row3_col4');
              row3_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[1] + "|цена-" + this.price[0]+"</span>";
              row3_col4.style.color = "black";
          }
          };

          var LevelB2= {
            level: "Уровень В2",
            colorIfpress: "yellow",
            colorIfnotpress: "pink",
            startDate:["1 июля", "6 июля", "19 июля"],
            days:["ПН","ВТ","CР","ЧТ","ПТ","CБ"],
            time:["9.00-12.15", "19.00-22.15"],
            details: "Летний интенсивный курс| 60 академических часов|",
            duration:["4 недели","5 недель","8 недель"],
            price:["12 000 руб", "15 000 руб"],
            total: function () {

                 let buttonB2= document.getElementById('buttonB2');
                 buttonB2.style.backgroundColor =this.colorIfpress;
                 let buttonA1= document.getElementById('buttonA1');
                 buttonA1.style.backgroundColor=this.colorIfnotpress;
                 let buttonA2= document.getElementById('buttonA2');
                 buttonA2.style.backgroundColor=this.colorIfnotpress;
                 let buttonB1= document.getElementById('buttonB1');
                 buttonB1.style.backgroundColor=this.colorIfnotpress;
                 let buttonC1= document.getElementById('buttonC1');
                 buttonC1.style.backgroundColor=this.colorIfnotpress;

                 let row1_col1= document.getElementById('row1_col1');
                 row1_col1.innerHTML = "<span>"+ this.startDate[0]+"</span>";
                 row1_col1.style.color = "black";

                 let row1_col2= document.getElementById('row1_col2');
                 row1_col2.innerHTML = "<span>"+ this.days[0] + this.days[2]+ ","+ this.days[4]+"</span>" ;
                 row1_col2.style.color = "black";

                 let row1_col3= document.getElementById('row1_col3');
                 row1_col3.innerHTML = "<span>"+ this.time[0] + "</span>";
                 row1_col3.style.color = "black";

                 let row1_col4= document.getElementById('row1_col4');
                 row1_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[2] + "|цена-" + this.price[0]+"</span>";
                 row1_col4.style.color = "black";

                 let row2_col1= document.getElementById('row2_col1');
                 row2_col1.innerHTML = "<span>"+ this.startDate[1]+"</span>";
                 row2_col1.style.color = "black";

                 let row2_col2= document.getElementById('row2_col2');
                 row2_col2.innerHTML = "<span>"+this.days[1] + ","+ this.days[3]+"</span>" ;
                 row2_col2.style.color = "black";

                 let row2_col3= document.getElementById('row2_col3');
                 row2_col3.innerHTML = "<span>"+ this.time[1] + "</span>";
                 row2_col3.style.color = "black";

                 let row2_col4= document.getElementById('row2_col4');
                 row2_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[1] + "|цена-" + this.price[1]+"</span>";
                 row2_col4.style.color = "black";

                 let row3_col1= document.getElementById('row3_col1');
                 row3_col1.innerHTML = "<span>"+ this.startDate[2]+"</span>";
                 row3_col1.style.color = "black";

                 let row3_col2= document.getElementById('row3_col2');
                 row3_col2.innerHTML = "<span>"+this.days[0] + ","+  this.days[2] + ","+ this.days[4]+"</span>" ;
                 row3_col2.style.color = "black";

                 let row3_col3= document.getElementById('row3_col3');
                 row3_col3.innerHTML = "<span>"+ this.time[0] + "</span>";
                 row3_col3.style.color = "black";

                 let row3_col4= document.getElementById('row3_col4');
                 row3_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[1] + "|цена-" + this.price[0]+"</span>";
                 row3_col4.style.color = "black";
             }
             };

             var LevelC1= {
               level: "Уровень C1",
               colorIfpress: "yellow",
               colorIfnotpress: "pink",
               startDate:["10 июля", "25 июня"],
               days:["ПН","ВТ","CР","ЧТ","ПТ","CБ"],
               time:["9.00-12.15", "19.00-22.15"],
               details: "Летний интенсивный курс| 60 академических часов|",
               duration:["4 недели","5 недель","8 недель"],
               price:["12 000 руб", "15 000 руб"],
               total: function () {

                    let buttonC1= document.getElementById('buttonC1');
                    buttonC1.style.backgroundColor =this.colorIfpress;
                    let buttonA1= document.getElementById('buttonA1');
                    buttonA1.style.backgroundColor=this.colorIfnotpress;
                    let buttonA2= document.getElementById('buttonA2');
                    buttonA2.style.backgroundColor=this.colorIfnotpress;
                    let buttonB1= document.getElementById('buttonB1');
                    buttonB1.style.backgroundColor=this.colorIfnotpress;
                    let buttonB2= document.getElementById('buttonB2');
                    buttonB2.style.backgroundColor=this.colorIfnotpress;

                    let row1_col1= document.getElementById('row1_col1');
                    row1_col1.innerHTML = "<span>"+ this.startDate[0]+"</span>";
                    row1_col1.style.color = "black";

                    let row1_col2= document.getElementById('row1_col2');
                    row1_col2.innerHTML = "<span>"+ this.days[0] + this.days[2]+ ","+ this.days[4]+"</span>" ;
                    row1_col2.style.color = "black";

                    let row1_col3= document.getElementById('row1_col3');
                    row1_col3.innerHTML = "<span>"+ this.time[0] + "</span>";
                    row1_col3.style.color = "black";

                    let row1_col4= document.getElementById('row1_col4');
                    row1_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[2] + "|цена-" + this.price[0]+"</span>";
                    row1_col4.style.color = "black";

                    let row2_col1= document.getElementById('row2_col1');
                    row2_col1.innerHTML = "<span>"+ this.startDate[1]+"</span>";
                    row2_col1.style.color = "black";

                    let row2_col2= document.getElementById('row2_col2');
                    row2_col2.innerHTML = "<span>"+this.days[1] + ","+ this.days[3]+"</span>" ;
                    row2_col2.style.color = "black";

                    let row2_col3= document.getElementById('row2_col3');
                    row2_col3.innerHTML = "<span>"+ this.time[1] + "</span>";
                    row2_col3.style.color = "black";

                    let row2_col4= document.getElementById('row2_col4');
                    row2_col4.innerHTML = "<span>"+ this.details + "продолжительность -" + this.duration[1] + "|цена-" + this.price[1]+"</span>";
                    row2_col4.style.color = "black";

                    let row3_col1= document.getElementById('row3_col1');
                    row3_col1.innerHTML = "-";


                    let row3_col2= document.getElementById('row3_col2');
                    row3_col2.innerHTML = "-";

                    let row3_col3= document.getElementById('row3_col3');
                    row3_col3.innerHTML = "-";

                    let row3_col4= document.getElementById('row3_col4');
                    row3_col4.innerHTML = "-";
                }
                };
