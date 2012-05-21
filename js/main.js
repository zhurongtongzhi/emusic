$(document).ready(function(){
$(".nav2 li").hide();
$(".nav2").mouseover(function(){
$(this).find("li").show();
$(this).css({ 'background' : '#1376c9 url(/emusic/static/image/navbc2.gif) repeat-x'});  
$(".nav2").mouseleave(function(){
$(".nav2 li").hide();
$(this).css({ 'background' : '#1376c9 url(/emusic/static/image/navbc1.gif) repeat-x'}); 

});
});
});