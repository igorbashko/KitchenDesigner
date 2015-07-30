/* 
 * This script is for appearance of changing fronts 
 */
$(document).ready(function(){
        $('img.click').click(function(){
        //console.log(point);
        var path;
        var background1;
        var background2;
        if(point == "button1"){
            path = "images/KitchenParts/Parts1/"
            background2 = '.background2';
            background1 = '.background';
        }else if(point == "button2"){
            path="images/KitchenParts/Part2/"
          background1 = ".background4";
          background2 = ".background3";
        }else if(point === 'button3' ){
            path="images/KitchenParts/Part3/";
            background1 = ".background5";
            background2 = ".background6";
        }else if(point === "button4"){
            path = "images/KitchenParts/Part4/";
            background1="#background7";
            background2="#background8";
        }else if(point ==="button5"){
           path ="images/KitchenParts/Stones/";
           background1 ="#background9";
           background2="#background10";
        }
        var src = path + $(this).attr('alt');
        console.log(path);
        console.log(popUPName);
        $('#overlay').remove();
        var tagName = "."+popUPName;
        $(tagName).fadeOut(500);
      $(background1).fadeTo('fast', 0.0, function(){
       $(this).css("background","url("+ src + ") repeat scroll center /100%");
      }).fadeTo(800, 1);
            setTimeout(function(){$(background2).css("background","url(" + src + ") repeat scroll center /100%")}, 1000);
   });
})
