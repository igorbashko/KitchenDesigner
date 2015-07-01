/* 
 * This script is for appearance of changing fronts 
 */
$(document).ready(function(){
    $('img.click').click(function(){
        var src=$(this).attr('alt');
        console.log(src);
        $('#overlay').remove();
        $('.front').fadeOut(500);
      $('.background').fadeTo('fast', 0.0, function(){
       $(this).css("background","url(" + src + ") repeat scroll center /100%");
      }).fadeTo(800, 1);
            //setTimeout(function(){$('.background2').css("background","url(" + src + ") repeat scroll center /100%")}, 1000);
   });
})
