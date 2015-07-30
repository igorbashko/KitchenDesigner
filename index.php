<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ART-Мебель01</title>
<meta name="description" content="Description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="designer.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../JS/JQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="JS/jquery.js"></script>
<script type="text/javascript" src="JS/jqueryColor.js"></script>

<script type="text/javascript" src="JS/appearance.js" ></script>
</head>

<body>
    <div id="background0"></div>
    <div class="background2">
        </div>
    <div class="background">
        <div id="Button1">
            <a class="popUPS" id="button1" rel="front" href="#"><img src="images/icons/click.png"/></a>
     </div>
    </div>
    <div id="background9"></div>
    <div id ="background10"></div>
    <div class="background3"></div>
    <div class="background4">
        <div id="Button2">
            <a class="popUPS" id="button2" rel="front" href="#"><img src="images/icons/click.png"></a>
        </div>
    </div>
     
    <div class="background5"></div> 
    <div class="background6">
        <div id="Button3">
            <a class="popUPS" id="button3" rel="front" href="#"><img src="images/icons/click.png"></a>
        </div>
    </div>
    <div id="background7"></div>
    <div id="background8"></div>
   
    <div id="Button4">
        <a class="popUPS" id="button4" rel="front" href="#"><img src="images/icons/click.png"></a>
    </div>
    <div id="Button5">
        <a class="popUPS" id="button5" rel="stone" href="#"><img src="images/icons/click.png"></a>
    </div>
    <div class="popUP front">
        <a class="close" href="#"><img src="images/icons/close.png"></a>
    <h2>Выбирите цвет фасада</h2>
    <div class="img_wrap">   
    
    <?php
    require_once 'PHP/ChangePicture.php';
    $galler = new ChangPicture();
    $galler->changePicture("images/Colors");
  // $galler->writeToFile("JsonDatabase/Part1.txt");
  // $galler->writeToFile("JsonDatabase/Part2.txt");
   //$galler->writeToFile("JsonDatabase/Part3.txt");
     ?>
            </div>
</div>
    <div class="popUP stone">
        <a class="close" href="#"><img src="images/icons/close.png"></a>
        <h2>Выберите камень</h2>
        <div class="img_wrap">
    <?php 
    $stoneGellary = new ChangPicture();
    $stoneGellary->changePicture("images/StoneColors");
    ?>
        </div>
    </div>
   <script>
    var point;
    var poPUPName //The name of popup tag for removing it after a color was chosen
    $(document).ready(function (){
             $('a.popUPS').click(function(){
             var i = $(this).attr("rel");
                popUPName = i;            
                $('div.'+ i).fadeIn(900);
              $("body").append("<div id='overlay'></div>");
                        
             point = $(this).attr('id');
             //$('div.'+i).fadeIn(900);
              //console.log(point);
          
             
         // $("body").append("<div id='overlay'></div>");
          //$("#overlay").show().css();
          
          return false;
         // console.log(i);
            
          });
          $('a.close').click(function () {
		$(this).parent().fadeOut(100);
		$('#overlay').remove('#overlay');
                return false;
	});
       })   
    </script>
    
 </body>

</html>
