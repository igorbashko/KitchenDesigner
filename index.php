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
    <div class="background2">
    <div class="background">
        <div id="Button1">
     <a id="popUPS" rel="front" href="#"><img src="close.png"/></a>
     </div>
        
    </div>
    </div>
   
    <div class="popUP front">
      <a class="close" href="#">Close</a>
    <h2>Выбирите столешницу</h2>
    <div class="img_wrap">   
    
    <?php
    require_once 'PHP/ChangePicture.php';
    $galler = new ChangPicture();
    $galler->changePicture("images/Colors");
     ?>
            </div>
</div>
   <script>
     $(document).ready(function (){
         $('a#popUPS').click(function(){
             var i = $(this).attr("rel");
             
             $('div.'+i).fadeIn(900);
             // console.log(i);
          
             
          $("body").append("<div id='overlay'></div>");
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
