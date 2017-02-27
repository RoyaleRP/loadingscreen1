 var changeImage = function(id, image){
  $(id).css('background-image', 'url('+image+')');
};
$(window).load(function() {
 	  var i = 0;
    $("#bg-btm").css("opacity", 0);
    changeImage('#bg-btm', images[i]);
    changeBackground();
    function changeBackground() {
      	$('#bg-btm')
        .animate({"opacity": 1}, 2000, function(){
          changeImage('body', images[i], 1);
        	  if (++i >= images.length) { i = 0; } 
        	  $("#bg-btm").css("opacity", 0);
        	  changeImage('#bg-btm', images[i]);
     	 });
    }
  
    setInterval(changeBackground, 3000);
});