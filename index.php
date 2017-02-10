<?php

require_once("lib-0.php");
load_it_all_up("Welcome");

$sta = new human();
$sta->initiate_mysql("");
if (isset($_GET['referer'])) $current_hit = $sta->update_hits("index", $_GET['referer']);
else $current_hit = $sta->update_hits("index", "direct");

?>


<body>
<!--div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->

<div id="all" class="ccenter">



<div id='ssize'></div>
<script>
sW= window.innerWidth != null? window.innerWidth: document.body != null? document.body.clientWidth:null;
if (sW > 1079){
	$('ssize').innerHTML = 'l'
}
//if the width is greater than = to 720, allow for two columns
else if ((sW < 1080) && (sW > 719)) {
	$('ssize').innerHTML = 'm'
}

//else, sorry! just one column
else if (sW < 720) {
	$('ssize').innerHTML = 's'
}
</script>



<div class="onecontainer">
<div class="twocontainer">
<div class="two">
<script> document.write("<img src=\"" + $('ssize').innerHTML  + "/images/header-top-1.png\" class=\"ccenter\" />") </script>
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/header-bottom-1.png\" class=\"ccenter\" />") </script> 
</div><!--two-->
</div><!--twocontainer-->

<div class="twocontainer">
<div class="two">
<div class="font1 fonttitle fontcyan">
Welcome to singteam.com!</div>
<div class="font2 fontcharcoal">What would you like to do next?</div>
</div><!--two-->


<!--div class="two font3">
<a href="" onMouseOver="flip(nb0), impress(0)" onMouseDown="press(nb0), dopress(0)" onMouseOut="out(nb0), unimpress(0)">
<span class="c2 fonttitle fontcharcoal"><span id='link0'>Read the blog<br/></span><span class="c2 font6 fontgold">news, inspiration, music and more</span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-h-0.png\" name=\"nb0\" />") </script>
</span>
</a>
</div-->

<div class="two font3">
<a href="FAQs.php?referer=welcome" onMouseOver="flip(nb1), impress(1)" onMouseDown="press(nb1), dopress(1)" onMouseOut="out(nb1), unimpress(1)">
<span class="c2 fonttitle fontcharcoal"><span id='link1'>Learn More<br/></span><span class="c2 font6 fontgold">FAQs about Sing Team and rehearsals</span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-h-0.png\" name=\"nb1\"  />") </script>
</span>
</a>
</div>

<div class="two font3">
<a href="http://www.singeracademy.us" target="_blank" onMouseOver="flip(nb2), impress(2)" onMouseDown="press(nb2), dopress(2)" onMouseOut="out(nb2), unimpress(2)">
<span class="c2 fonttitle fontcharcoal"><span id='link2'>Take piano<br/></span><span class="c2 font6 fontcyan">Learn from the pianist of the Hastings Symphony</span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-h-0.png\" name=\"nb2\"  />") </script>
</span>
</a>
</div>

<div class="two font3">
<a href="completereg.php" onMouseOver="flip(nb3), impress(3)" onMouseDown="press(nb3), dopress(3)" onMouseOut="out(nb3), unimpress(3)">
<span class="c2 fonttitle fontcharcoal"><span id='link3'>Enroll<br/></span><span class="c2 font6 fontred">join Sing Team America today!</span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-h-0.png\" name=\"nb3\"  />") </script>
</span>
</a>
</div>



<div class="two font3">
<a href="javascript:unhide('reveal0');" onMouseOver="flipv(nb4), impress(4)" onMouseDown="pressv(nb4), dopress(4)" onMouseOut="outv(nb4), unimpress(4)">
<span class="c2 fonttitle fontcharcoal"><span id='link4'>Contact Us<br/></span><span class="c2 font6 fontgold">Sing Team's phone # and e-mail</span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb4\"  />") </script>
</span>
</a>
</div>

<div id="reveal0" class="hidden">
<div class="twocontainer">
<div class="two"><div class="c2 font4 fontcharcoal">Call Sing Team<br/>(402) 831 9555</div><div class="c2 font4 fontcharcoal">E-mail Sing Team<br/>info@singteam.com</div></div></div>
<div class="twocontainer font5 fonttitle fontblue und"><a href="javascript:unhide('reveal0');">x close</a></div>
</div><!--reveal0-->


<div class="two tcenter">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/three-stars-1.png\"  />") </script>
</div>




</div><!--twocontainer-->
</div><!--onecontainer-->

<div class="onecontainer">
<div class="twocontainer">
<div class="two">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/kids-1.jpg\" class=\"ccenter\"/>") </script>
</div><!--two-->
</div><!--twocontainer-->

<div class="twocontainer">
<div class="two"><span class="font2 fontred">
Thank you for visiting singteam.com!<br/></span><span class="font2 fontgold">Sing Team America is an unprecedented opportunity for students ages 9 and up to</span><ul type="disc" class="fontcharcoal">
<li>Make steadfast friends</li>
<li>Increase self confidence</li>
<li>Be musically expressive and communicative</li>
<li>Make decisions and learn to lead well</li>
<li>Use multiple talents, such as singing, acting, dancing, and design, in one dynamic setting</li>

</ul>
</div><!--two-->

<!--div class="two">
<fb:like href="http://www.facebook.com/unite.lead.sing" send="true" layout="button_count" width="450" show_faces="true" font="arial"></fb:like>
</div--><!--two-->

<!--div class="two">
<div class="c4">
<a href="http://www.twitter.com/@singteam"><img src="1088/images/twitter-bird-light-bgs.jpg"/></a>
<a href="http://www.facebook.com/unite.lead.sing"><img src="1088/images/f_logo.jpg"/></a>
</div>
</div--><!--two-->

</div><!--twocontainer-->
</div><!--onecontainer-->
</div><!--all-->



</body>
</html>
