jQuery(function($){  
    function layer_open(obj){     
       //$('.layer').fadeIn(); 
       var $obj = $(obj), 
       $layer = $obj.parent().next(".layer"), 
       $layerArea = $layer.find(".layer_area"), 
       $dim = $(".dim"); 
       $dim.show(); 
       $layer.show(); 
      var _WIDTH = $layerArea.width()/2, 
       _HEIGHT = $layerArea.height()/2; 
       $layerArea.css({"margin-left":-_WIDTH,"margin-top":-_HEIGHT,"top":"46%","opacity":"0"}).animate({ 
       opacity : 1, 
       top : 45+"%" 
    },500); 
 }  

 $('.layer_open').click(function(){  
 layer_open($(this));  
 });  

$('.layer_close').click(function(){  

$(this).parents(".layer").fadeOut(); 

  $(".dim").hide(); 

});  

 });  