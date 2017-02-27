var backgroundchanger = function(id, image){
  $(id).css('background-image', 'url('+image+')');
};

$(window).load(function() {
    var img = 0;
    
    $("#bg_opacity").css("opacity", 0);
    backgroundchanger('#bg_opacity', images[img]);
    changeBackground();
    
    function changeBackground() {
      $('#bg_opacity')
        .animate({"opacity": 1}, 2000, function(){
          backgroundchanger('#bg_slider1', images[img], 1);
          if (++i >= images.length) { i = 0; } 
          $("#bg_opacity").css("opacity", 0);
          backgroundchanger('#bg_slider1', images[img]);
      });
    }
  
    setInterval(changeBackground, 10000);
});