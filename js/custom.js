(function($){ 



    $(window).scroll(function(){
        
    var globaheader =   $(window).scrollTop();
    var theglobal =  $(".header").scrollTop();
        
        if(globaheader > theglobal){
            $('.header').addClass('fix');
            
        }
        else{
            $('.header').removeClass('fix');
        }
        
    });
    




      $("#lightSlider").lightSlider({
				
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
		  
	  });

$('.video-view').magnificPopup({
  type: 'iframe',

});

 
})(jQuery);
   
  
   
