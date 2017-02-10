<?php
require_once("lib-0.php");
require_once("lib-1.php");
require_once("lib-2.php");

echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
echo "<html xmlns=\"http://www.w3.org/1999/xhtml\"   xmlns:fb=\"http://ogp.me/ns/fb#\">";
echo "<head>";

echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
echo "<meta name='description' content='Sing Team America | Welcome | Vanquish mediocrity.' />";
echo "<meta name='keywords' content='sing team, sing, team, sta, STA, singteam, singing, singer, show, choir, jazz, pop, music, nebraska, america, childrens, homeschool, home-school, childrens choir, compete' />";

echo "<title>Sing Team America | Welcome | Vanquish mediocrity.</title>";

?>
<style type="text/css">
@import: url('dynamick.css');
</style>

<link href="dynamick.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" language="javascript">

var mySheet = document.styleSheets[0]

col_widepercentage = .96
colside_marginpercentage = .01
colside_paddingpercentage = .01
coltop_marginpercentage = .0008
coltop_paddingpercentage = .0008
fontpercentagel = .0159
fontpercentagem = .0244
fontpercentages = .0516
maxwidth = 1536
lscreen = 1152
mscreen = 840

sW = window.innerWidth != null? window.innerWidth: document.body != null? document.body.clientWidth:null;
addCSSRule("#supercontainer", "width: " + sW + "px")
//if the width is greater than = to 1080, allow for three columns
if (sW > maxwidth - 1) {		

	addCSSRule("#all", "width: " + maxwidth + "px")
	addCSSRule("#all .onecontainer", "width: " + maxwidth + "px")
	sW = maxwidth
}
else {

	addCSSRule("#all", "width: " + sW + "px")
	addCSSRule("#all .onecontainer", "width: " + sW + "px")
	
}

if (sW > lscreen - 1){

	addRules("#all .one", sW)
	addRules("#all .two", sW / 2)
	addRules("#all .three", sW / 3)
	addRules("#all .twocontainer", sW / 2)
	addRules("#all .threecontainer", sW / 3)
	prepimages("l")
	addCSSRule("#all", "font-size: " + (sW * fontpercentagel) + "px")
}
//if the width is greater than = to 720, allow for two columns
else if ((sW < lscreen) && (sW > mscreen - 1)) {
	addRules("#all .one", sW)
	addRules("#all .two", sW / 2)
	addRules("#all .three", sW / 2)
	addRules("#all .twocontainer", sW / 2)
	addRules("#all .threecontainer", sW / 2)
	prepimages("m")
	addCSSRule("#all", "font-size: " + (sW * fontpercentagem) + "px")
}

//else, sorry! just one column
else if (sW < mscreen) {
	addRules("#all .one", sW)
	addRules("#all .two", sW)
	addRules("#all .three", sW)
	addRules("#all .twocontainer", sW)
	addRules("#all .threecontainer", sW)
	prepimages("s")
	addCSSRule("#all", "font-size: " + (sW * fontpercentages) + "px")	
}

function addRules(selector, sW){
	sW = sW * col_widepercentage
	addCSSRule(selector, "width: " + sW + "px")
	addCSSRule(selector, "margin-left: " + (sW * colside_marginpercentage) + "px")
	addCSSRule(selector, "margin-right: " + (sW * colside_marginpercentage) + "px")
	addCSSRule(selector, "margin-top: " + (sW * coltop_marginpercentage) + "px")
	addCSSRule(selector, "margin-bottom: " + (sW * coltop_marginpercentage) + "px")

	addCSSRule(selector, "padding-left: " + (sW * colside_paddingpercentage) + "px")
	addCSSRule(selector, "padding-right: " + (sW * colside_paddingpercentage) + "px")
	addCSSRule(selector, "padding-top: " + (sW * coltop_paddingpercentage) + "px")
	addCSSRule(selector, "padding-bottom: " + (sW * coltop_paddingpercentage) + "px")
	
	//now, divide the style into 3/4, 2/3, 2, 3 and 4 columns
	addRules2(selector + " .c0", (sW * 3) / 4)   
	addRules2(selector + " .c1", (sW * 2) / 3)  
	addRules2(selector + " .c2", sW / 2)  
	addRules2(selector + " .c3", sW / 3)  
	addRules2(selector + " .c4", sW / 4)
}
function addRules2(selector, sW){
	sW = sW * col_widepercentage
	addCSSRule(selector, "width: " + sW + "px")
	
	addCSSRule(selector, "margin-left: " + (sW * colside_marginpercentage) + "px")
	addCSSRule(selector, "margin-right: " + (sW * colside_marginpercentage) + "px")
	addCSSRule(selector, "margin-top: " + (sW * coltop_marginpercentage) + "px")
	addCSSRule(selector, "margin-bottom: " + (sW * coltop_marginpercentage) + "px")

	addCSSRule(selector, "padding-left: " + (sW * colside_paddingpercentage) + "px")
	addCSSRule(selector, "padding-right: " + (sW * colside_paddingpercentage) + "px")
	addCSSRule(selector, "padding-top: " + (sW * coltop_paddingpercentage) + "px")
	addCSSRule(selector, "padding-bottom: " + (sW * coltop_paddingpercentage) + "px")
}
function addCSSRule(selector, newRule) {
  if (mySheet.addRule) { mySheet.addRule(selector, newRule); } 
  else {  ruleIndex = mySheet.cssRules.length;   mySheet.insertRule(selector + '{' + newRule + ';}', ruleIndex); }// endif mySheet.addRule
 } // end addCSSRule()

function $(id) {
	return document.getElementById(id)
}
function n(name) {
	return document.getElementsByName(name)
}
function prepimages(size) {

	var inames = new Array('nav-button-1-h-', 'nav-button-1-v-')

// Preload
	if (document.images) {


		original = new Image()
	    original.src = size+"/images/"+inames[0]+"0.png"
	    flipped = new Image()
	    flipped.src = size+"/images/"+inames[0]+"1.png"
		pressed = new Image()
	    pressed.src = size+"/images/"+inames[0]+"2.png"
		
		originalv = new Image()
	    originalv.src = size+"/images/"+inames[1]+"0.png"
	    flippedv = new Image()
	    flippedv.src = size+"/images/"+inames[1]+"1.png"
		pressedv = new Image()
	    pressedv.src = size+"/images/"+inames[1]+"2.png"

	}
}

function flip(imag) {
	imag.src = flipped.src
	return true;
}
function flipv(imag) {
	imag.src = flippedv.src
	return true;
}
function impress(id) {
	if (id == 0) {
	$('link0').innerHTML = "<span class=\"fonttitle fontblack und\">Read the blog</span>"}
	else if (id == 1) {
	$('link1').innerHTML = "<span class=\"fonttitle fontblack und\">Learn more</span>"}
	else if (id == 2) {
	$('link2').innerHTML = "<span class=\"fonttitle fontblack und\">Take piano</span>"}	
	else if (id == 3) {
	$('link3').innerHTML = "<span class=\"fonttitle fontblack und\">Enroll</span>"}	
	else if (id == 4) {
	$('link4').innerHTML = "<span class=\"fonttitle fontblack und\">Contact Us</span>"}	
	
	
	else if (id == 5) {
	$('link5').innerHTML = "<span class=\"fontblack und\">Who may join Sing Team?</span>"}	
	else if (id == 6) {
	$('link6').innerHTML = "<span class=\"fontblack und\">What cities currently have a Sing Team?</span>"}	
	else if (id == 7) {
	$('link7').innerHTML = "<span class=\"fontblack und\">Where does Sing Team meet?</span>"}	
	else if (id == 8) {
	$('link8').innerHTML = "<span class=\"fontblack und\">What does it cost to join Sing Team?</span>"}	
	else if (id == 9) {
	$('link9').innerHTML = "<span class=\"fontblack und\">How many people are on each Sing Team?</span>"}	
	else if (id == 10) {
	$('link10').innerHTML = "<span class=\"fontblack und\">Are there age or talent divisions in SingTeam?</span>"}	
	else if (id == 11) {
	$('link11').innerHTML = "<span class=\"fontblack und\">Who leads each team?</span>"}	
	else if (id == 12) {
	$('link12').innerHTML = "<span class=\"fontblack und\">What is the overall time commitment and schedule?</span>"}	
	else if (id == 13) {
	$('link13').innerHTML = "<span class=\"fontblack und\">What are rehearsals like?</span>"}	
	else if (id == 14) {
	$('link14').innerHTML = "<span class=\"fontblack und\">What are competitions like?</span>"}	
	else if (id == 15) {
	$('link15').innerHTML = "<span class=\"fontblack und\">Sing Team is a Christian organization. Why? What does this mean?</span>"}	
	else if (id == 16) {
	$('link16').innerHTML = "<span class=\"fontblack und\">What talents will each student develop?</span>"}	
	else if (id == 17) {
	$('link17').innerHTML = "<span class=\"fontblack und\">What leadership opportunities will each student have?</span>"}	
	else if (id == 18) {
	$('link18').innerHTML = "<span class=\"fontblack und\">Who chooses the music?</span>"}	
	else if (id == 19) {
	$('link19').innerHTML = "<span class=\"fontblack und\">What styles of music are accepted?</span>"}	
	else if (id == 20) {
	$('link20').innerHTML = "<span class=\"fontblack und\">What is the background of Douglas Singer, the President of Sing Team?</span>"}	
	else if (id == 21) {
	$('link21').innerHTML = "<span class=\"fontblack und\">I don't see my question here!</span>"}
	else if (id == 22) {
	$('link22').innerHTML = "<span class=\"fontred und\">Enroll in Sing Team</span>"}
	else if (id == 23) {
	$('link23').innerHTML = "<span class=\"fontred und\">Return Home</span>"}
	
}

function press(imag) {
	imag.src = pressed.src
	return true;
}
function pressv(imag) {
	imag.src = pressedv.src
	return true;
}
function dopress(id) {
	if (id == 0) {
	$('link0').innerHTML = "<span class=\"fonttitle fontred und\">Read the blog</span>"}
	else if (id == 1) {
	$('link1').innerHTML = "<span class=\"fonttitle fontred und\">Learn more</span>"}
	else if (id == 2) {
	$('link2').innerHTML = "<span class=\"fonttitle fontred und\">Take piano</span>"}	
	else if (id == 3) {
	$('link3').innerHTML = "<span class=\"fonttitle fontred und\">Enroll</span>"}	
	else if (id == 4) {
	$('link4').innerHTML = "<span class=\"fonttitle fontred und\">Contact Us</span>"}
	
	else if (id == 5) {
	$('link5').innerHTML = "<span class=\"fontred und\">Who may join Sing Team?</span>"}
	else if (id == 6) {
	$('link6').innerHTML = "<span class=\"fontred und\">What cities currently have a Sing Team?</span>"}	
	else if (id == 7) {
	$('link7').innerHTML = "<span class=\"fontred und\">Where does Sing Team meet?</span>"}	
	else if (id == 8) {
	$('link8').innerHTML = "<span class=\"fontred und\">What does it cost to join Sing Team?</span>"}	
	else if (id == 9) {
	$('link9').innerHTML = "<span class=\"fontred und\">How many people are on each Sing Team?</span>"}	
	else if (id == 10) {
	$('link10').innerHTML = "<span class=\"fontred und\">Are there age or talent divisions in SingTeam?</span>"}	
	else if (id == 11) {
	$('link11').innerHTML = "<span class=\"fontred und\">Who leads each team?</span>"}	
	else if (id == 12) {
	$('link12').innerHTML = "<span class=\"fontred und\">What is the overall time commitment and schedule?</span>"}	
	else if (id == 13) {
	$('link13').innerHTML = "<span class=\"fontred und\">What are rehearsals like?</span>"}	
	else if (id == 14) {
	$('link14').innerHTML = "<span class=\"fontred und\">What are competitions like?</span>"}	
	else if (id == 15) {
	$('link15').innerHTML = "<span class=\"fontred und\">Sing Team is a Christian organization. Why? What does this mean?</span>"}	
	else if (id == 16) {
	$('link16').innerHTML = "<span class=\"fontred und\">What talents will each student develop?</span>"}	
	else if (id == 17) {
	$('link17').innerHTML = "<span class=\"fontred und\">What leadership opportunities will each student have?</span>"}	
	else if (id == 18) {
	$('link18').innerHTML = "<span class=\"fontred und\">Who chooses the music?</span>"}	
	else if (id == 19) {
	$('link19').innerHTML = "<span class=\"fontred und\">What styles of music are accepted?</span>"}	
	else if (id == 20) {
	$('link20').innerHTML = "<span class=\"fontred und\">What is the background of Douglas Singer, the President of Sing Team?</span>"}	
	else if (id == 21) {
	$('link21').innerHTML = "<span class=\"fontred und\">I don't see my question here!</span>"}	
	else if (id == 22) {
	$('link22').innerHTML = "<span class=\"fontcharcoal und\">Enroll in Sing Team</span>"}
	else if (id == 23) {
	$('link23').innerHTML = "<span class=\"fontcharcoal und\">Return Home</span>"}

}

function out(imag) {
	imag.src = original.src
	return true;
}
function outv(imag) {
	imag.src = originalv.src
	return true;
}
function unimpress(id) {
	if (id == 0) {
	$('link0').innerHTML = "Read the blog"}
	else if (id == 1) {
	$('link1').innerHTML = "Learn more"}
	else if (id == 2) {
	$('link2').innerHTML = "Take piano"}	
	else if (id == 3) {
	$('link3').innerHTML = "Enroll"}	
	else if (id == 4) {
	$('link4').innerHTML = "Contact Us"}
	
	else if (id == 5) {
	$('link5').innerHTML = "Who may join Sing Team?"}
		else if (id == 6) {
	$('link6').innerHTML = "What cities currently have a Sing Team?"}	
	else if (id == 7) {
	$('link7').innerHTML = "Where does Sing Team meet?"}	
	else if (id == 8) {
	$('link8').innerHTML = "What does it cost to join Sing Team?"}	
	else if (id == 9) {
	$('link9').innerHTML = "How many people are on each Sing Team?"}	
	else if (id == 10) {
	$('link10').innerHTML = "Are there age or talent divisions in SingTeam?"}	
	else if (id == 11) {
	$('link11').innerHTML = "Who leads each team?"}	
	else if (id == 12) {
	$('link12').innerHTML = "What is the overall time commitment and schedule?"}	
	else if (id == 13) {
	$('link13').innerHTML = "What are rehearsals like?"}	
	else if (id == 14) {
	$('link14').innerHTML = "What are competitions like?"}	
	else if (id == 15) {
	$('link15').innerHTML = "Sing Team is a Christian organization. Why? What does this mean?"}	
	else if (id == 16) {
	$('link16').innerHTML = "What talents will each student develop?"}	
	else if (id == 17) {
	$('link17').innerHTML = "What leadership opportunities will each student have?"}	
	else if (id == 18) {
	$('link18').innerHTML = "Who chooses the music?"}	
	else if (id == 19) {
	$('link19').innerHTML = "What styles of music are accepted?"}	
	else if (id == 20) {
	$('link20').innerHTML = "What is the background of Douglas Singer, the President of Sing Team?"}	
	else if (id == 21) {
	$('link21').innerHTML = "I don't see my question here!"}
	else if (id == 22) {
	$('link22').innerHTML = "Enroll in Sing Team"}
	else if (id == 23) {
	$('link23').innerHTML = "Return Home"}
	
}


function unhide(divID) {
 var item = document.getElementById(divID);
 if (item) {
 item.className=(item.className=='hidden')?'unhidden':'hidden';
 }
}



</script>
<meta name="robots" content="index, follow"/>
<meta name="web_author" content="Douglas Michael Singer, LLC"/>
<meta name="rating" content="safe for kids"/>
<meta name="copyright" content="2012, Douglas Michael Singer, LLC"/>
<meta name="revisit-after" content="2 days"/> 
<meta name="robots" content="noydir"/>
<meta name="language" content="English"/>
<meta name="slurp" content="noydir"/>
<meta name="distribution" content="global"/>
<meta name="googlebot" content="noodp"/>
<meta name="googlebot" content="noarchive"/>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" type="image/ico" href="favicon.ico" />

<?php

echo "</head>";

$sta = new human();
$sta->initiate_mysql("");
if (isset($_GET['referer'])) $current_hit = $sta->update_hits("FAQs", $_GET['referer']);
else $current_hit = $sta->update_hits("FAQs", "direct");
?>

<body>
<div id="supercontainer">
<div id="all" class="ccenter">

<div id='ssize'></div>
<script>
sW= window.innerWidth != null? window.innerWidth: document.body != null? document.body.clientWidth:null;
if (sW > lscreen - 1){
	$('ssize').innerHTML = 'l'
}
//if the width is greater than = to 720, allow for two columns
else if ((sW < lscreen) && (sW > mscreen - 1)) {
	$('ssize').innerHTML = 'm'
}

//else, sorry! just one column
else if (sW < mscreen) {
	$('ssize').innerHTML = 's'
}
</script>

<div class="onecontainer">
<script> document.write("<img src=\"" + $('ssize').innerHTML  + "/images/header-top-1.png\" class=\"ccenter\" />") </script>
</div>
<div class="onecontainer">
<span class="one fontcyan font0 tcenter">Sing Team FAQs (Frequently Asked Questions)</span>
</div>
<div class="threecontainer">

<div class="three font3">
<a href="javascript:unhide('reveal1');" onMouseOver="flipv(nb5), impress(5)" onMouseDown="pressv(nb5), dopress(5)" onMouseOut="outv(nb5), unimpress(5)">
<span class="c0 fontblack"><span id='link5'>Who may join Sing Team?</span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb5\"  />") </script>
</span>
</a>


<div id="reveal1" class="hidden">

<div class="c0 font4 fontcharcoal">SingTeam is open to students age 7-19.</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal1');">x close</a></div>

</div><!--reveal1-->
</div>


<div class="three font3">
<a href="javascript:unhide('reveal2');" onMouseOver="flipv(nb6), impress(6)" onMouseDown="pressv(nb6), dopress(6)" onMouseOut="outv(nb6), unimpress(6)">
<span class="c0 fontblack"><span id='link6'>What cities currently have a Sing Team?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb6\"  />") </script>
</span>
</a>


<div id="reveal2" class="hidden">
<div class="c0 font4 fontcharcoal">Hastings, Kearney and Red Cloud.  SingTeam provides you with an opportunity to sing without having to travel far.  SingTeam can start in any city, no matter how small, provided there are at least eight interested singers!</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal2');">x close</a></div>
</div><!--reveal1-->
</div>

<div class="three font3">
<a href="javascript:unhide('reveal3');" onMouseOver="flipv(nb7), impress(7)" onMouseDown="pressv(nb7), dopress(7)" onMouseOut="outv(nb7), unimpress(7)">
<span class="c0 fontblack"><span id='link7'>Where does Sing Team meet?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb7\"  />") </script>
</span>
</a>

<div id="reveal3" class="hidden">
<div class="c0 font4 fontcharcoal">Sing Team meets at a local church or school near you! Please call (402) 831 9555 for the specific meeting place in your town.</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal3');">x close</a></div>
</div><!--reveal3-->
</div>


<div class="three font3">
<a href="javascript:unhide('reveal4');" onMouseOver="flipv(nb8), impress(8)" onMouseDown="pressv(nb8), dopress(8)" onMouseOut="outv(nb8), unimpress(8)">
<span class="c0 fontblack"><span id='link8'>What does it cost to join Sing Team?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb8\"  />") </script>
</span>
</a>
<div id="reveal4" class="hidden">
<div class="c0 font4 fontcharcoal">Only $27/month, and only during months when SingTeam meets (Sep-Apr). Discounts are available for homeschool families. Call (402) 831 9555 for details!</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal4');">x close</a></div>
</div><!--reveal3-->
</div>

<div class="three font3">
<a href="javascript:unhide('reveal5');" onMouseOver="flipv(nb9), impress(9)" onMouseDown="pressv(nb9), dopress(9)" onMouseOut="outv(nb9), unimpress(9)">
<span class="c0 fontblack"><span id='link9'>How many people are on each Sing Team?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb9\"  />") </script>
</span>
</a>
<div id="reveal5" class="hidden">
<div class="c0 font4 fontcharcoal">The ideal size for a team is 6-16 students.  After gaining 12 students or so, an individual SingTeam may divide into two separate SingTeams, so there is plenty of opportunity for competition, leadership, and one-on-one instruction.</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal5');">x close</a></div>
</div><!--reveal5-->
</div>


<div class="three font3">
<a href="javascript:unhide('reveal6');" onMouseOver="flipv(nb10), impress(10)" onMouseDown="pressv(nb10), dopress(10)" onMouseOut="outv(nb10), unimpress(10)">
<span class="c0 fontblack"><span id='link10'>Are there age or talent divisions in SingTeam?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb10\"  />") </script>
</span>
</a>
<div id="reveal6" class="hidden">
<div class="c0 font4 fontcharcoal">Each SingTeam is divided into two or more groups based on age, but the age divisions are different from community to community.  For instance, in Red Cloud, there is an age 10-14 team and a 15+ team.  In Hastings, there is a 7-11 team, and a 12+ team.  The age divisions are made based on the team dynamics of the talent in your area.</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal6');">x close</a></div>
</div><!--reveal6-->
</div><!--three-->

</div><!--threecontainer-->
<div class="threecontainer">

<div class="three font3">
<a href="javascript:unhide('reveal7');" onMouseOver="flipv(nb11), impress(11)" onMouseDown="pressv(nb11), dopress(11)" onMouseOut="outv(nb11), unimpress(11)">
<span class="c0 fontblack"><span id='link11'>Who leads each team?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb11\"  />") </script>
</span>
</a>
<div id="reveal7" class="hidden">
<div class="c0 font4 fontcharcoal">Teams are student led, under the oversight of a Sing Team Licensed Instructor who appoints student leaders, guides the overall direction of the team, and teaches music to the students.</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal7');">x close</a></div>
</div><!--reveal7-->
</div>


<div class="three font3">
<a href="javascript:unhide('reveal8');" onMouseOver="flipv(nb12), impress(12)" onMouseDown="pressv(nb12), dopress(12)" onMouseOut="outv(nb12), unimpress(12)">
<span class="c0 fontblack"><span id='link12'>What is the overall time commitment and schedule?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb12\"  />") </script>
</span>
</a>
<div id="reveal8" class="hidden">
<div class="c0 font4 fontcharcoal">The time commitment varies depending on how active each student wishes to be.  The following is a breakdown of the time commitment that each student may expect.<br/><br/>

<div class="c0 fonttitle fontcyan">All students</div><br/>
One rehearsal a week, lasting 1.5 hours, from November through March<br/>
One competition per week, lasting 1-2 hours, on Saturday mornings, during February, March and April<br/><br/>

<div class="c0 fonttitle fontcyan">Students who wish to sing a solo piece</div><br/>
An additional 1-2 hours a week of practice on their own<br/><br/>

<div class="c0 fonttitle fontcyan">Students who take on leadership roles such as Team Captain, Dance Captain, and so on</div><br/>
An additional 1-2 hours a week filling leadership duties, plus an occasional extra meeting commitment.<br/><br/>
The Red Cloud SingTeams meet on Thursdays from 1-3.<br/>
The Hastings SingTeams meet on Fridays from 4-6.<br/>
The Kearney SingTeams will meet Thursday evenings, specific time TBD.<br/>
</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal8');">x close</a></div>
</div><!--reveal8-->
</div>


<div class="three font3">
<a href="javascript:unhide('reveal9');" onMouseOver="flipv(nb13), impress(13)" onMouseDown="pressv(nb13), dopress(13)" onMouseOut="outv(nb13), unimpress(13)">
<span class="c0 fontblack"><span id='link13'>What are rehearsals like?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb13\"  />") </script>
</span>
</a>
<div id="reveal9" class="hidden">
<div class="c0 font4 fontcharcoal">Rehearsals are a combination of hard work, and fun! A typical rehearsal pace is laid back, but with intense focus on the work at hand. During a typical rehearsal, students will warm up their voices, do an improvisation exercise, and sing together. Some rehearsals will be devoted entirely to dance choreography or discussing team matters.</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal9');">x close</a></div>
</div><!--reveal9-->
</div>


<div class="three font3">
<a href="javascript:unhide('reveal10');" onMouseOver="flipv(nb14), impress(14)" onMouseDown="pressv(nb14), dopress(14)" onMouseOut="outv(nb14), unimpress(14)">
<span class="c0 fontblack"><span id='link14'>What are competitions like?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb14\"  />") </script>
</span>
</a>
<div id="reveal10" class="hidden">
<div class="c0 font4 fontcharcoal">Competitions are full of energy, enthusiasm and fun! During a competition, your SingTeam will compete against other SingTeams in three events: improvisation, singing and music skills. In each of these events, there is team vs. team competition, and optional solo and duet competition for students who wish to participate. Teams are judged on factors such as musicality, expression, communication, quality of the dance routine, and overall team spirit.</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal10');">x close</a></div>
</div><!--reveal10-->
</div>
<div class="three font3">
<a href="javascript:unhide('reveal11');" onMouseOver="flipv(nb15), impress(15)" onMouseDown="pressv(nb15), dopress(15)" onMouseOut="outv(nb15), unimpress(15)">
<span class="c0 fontblack"><span id='link15'>Sing Team is a Christian organization. Why? What does this mean?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb15\"  />") </script>
</span>
</a>
<div id="reveal11" class="hidden">
<div class="c0 font4 fontcharcoal">SingTeam is a Christian organization because it was founded to glorify the Lord Jesus Christ, by helping people to sing in a way that reflects their full God-given potential for expression and communication.<div class="c0 fonttitle fontcyan"><br/>What this means</div><div class="c0 fontcharcoal"><ul type="disc"><li>We make no apology for basing our organization on Christian principles and for exposing our students to a Christian worldview.  However, we warmly welcome students of all beliefs to participate in SingTeam.</li><li>Students are encouraged to exhibit love and compassion for their fellow teammates.</li><li>SingTeam will not perform music or dances with objectionable content.</li><li>Students will be encouraged to embrace the full spectrum of their God-given abilities.</li></ul></div></div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal11');">x close</a></div>
</div><!--reveal11-->
</div>


<div class="three font3">
<a href="javascript:unhide('reveal12');" onMouseOver="flipv(nb16), impress(16)" onMouseDown="pressv(nb16), dopress(16)" onMouseOut="outv(nb16), unimpress(16)">
<span class="c0 fontblack"><span id='link16'>What talents will each student develop?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb16\"  />") </script>
</span>
</a>
<div id="reveal12" class="hidden">
<div class="c0 font4 fontcharcoal">Students will enjoy developing increased confidence and a deeper love for singing.  Students will enjoy developing better vocal technique, leadership skills, the ability to improvise (both musically and theatrically), and the ability to sing with much more communication, expression, freedom and self-enjoyment.</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal12');">x close</a></div>
</div><!--reveal12-->
</div><!--three-->
</div><!--threecontainer-->
<div class="threecontainer">

<div class="three font3">
<a href="javascript:unhide('reveal13');" onMouseOver="flipv(nb17), impress(17)" onMouseDown="pressv(nb17), dopress(17)" onMouseOut="outv(nb17), unimpress(17)">
<span class="c0 fontblack"><span id='link17'>What leadership opportunities will each student have?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb17\"  />") </script>
</span>
</a>
<div id="reveal13" class="hidden">
<div class="c0 font4 fontcharcoal">Students who successfully try out for SingTeam America leadership positions will be vested with decision making privileges and responsibilities! SingTeam is therefore a wonderful opportunity for students who wish to lead. These areas of the team will be under student leadership: Dance, Team Spirit, Design, Music and Promotions. Call (402) 831 9555 for more details!</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal13');">x close</a></div>
</div><!--reveal13-->
</div>


<div class="three font3">
<a href="javascript:unhide('reveal14');" onMouseOver="flipv(nb18), impress(18)" onMouseDown="pressv(nb18), dopress(18)" onMouseOut="outv(nb18), unimpress(18)">
<span class="c0 fontblack"><span id='link18'>Who chooses the music?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb18\"  />") </script>
</span>
</a>
<div id="reveal14" class="hidden">
<div class="c0 font4 fontcharcoal">Students have three options when it comes to music choice.<ul type="disc">
<li>Select a piece from a list of options</li>
<li>Ask the instructor to assign a piece to them</li>
<li>Suggest a piece that is not on the list of options, which the instructor may then approve</li></ul> </div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal14');">x close</a></div>
</div><!--reveal14-->
</div>


<div class="three font3"><div id="musicjump"></div>
<a href="javascript:unhide('reveal15');" onMouseOver="flipv(nb19), impress(19)" onMouseDown="pressv(nb19), dopress(19)" onMouseOut="outv(nb19), unimpress(19)">
<span class="c0 fontblack"><span id='link19'>What styles of music are accepted?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb19\"  />") </script>
</span>
</a>
<div id="reveal15" class="hidden">
<div class="c0 font4 fontcharcoal">SingTeam draws its musical repertoire from the following genres: Broadway, jazz, hip hop/r&b, and gospel.  Within these styles, pieces should follow these guidelines
<ul type="disc"><li>High quality of composition</li><li>Imaginative lyrics</li><li>Clean content</li><li>Conducive to good vocal technique</li></ul></div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal15');">x close</a></div>
</div><!--reveal15-->
</div>


<div class="three font3">
<a href="javascript:unhide('reveal16');" onMouseOver="flipv(nb20), impress(20)" onMouseDown="pressv(nb20, dopress(20)" onMouseOut="outv(nb20), unimpress(20)">
<span class="c0 fontblack"><span id='link20'>What is the background of Douglas Singer, the President of Sing Team?<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb20\"  />") </script>
</span>
</a>
<div id="reveal16" class="hidden">
<div class="c0 font4 fontcharcoal">Mr. Douglas Michael Singer was originally trained as a pianist, receiving a Masters in Music from the University of Northern Colorado. After some unexpected career turns, Mr. Singer found himself in the role of vocal accompanist at two of America's best universities, Taylor University and Ball State University. He discovered he had a talent for helping vocalists tap into expressive and communicative potential. At about the same time, he also caught the entrepreneurial bug, and after two years of considering various ideas, decided to launch Sing Team America!<div class="fontred und"><a href="http://www.douglasmichaelsinger.com/singeracademy/bio.php" >Mr. Douglas Singer's full bio may be read here.</a></div></div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal16');">x close</a></div>
</div><!--reveal16-->
</div>


<div class="three font3">
<a href="javascript:unhide('reveal17');" onMouseOver="flipv(nb21), impress(21)" onMouseDown="pressv(nb21), dopress(21)" onMouseOut="outv(nb21), unimpress(21)">
<span class="c0 fontblack"><span id='link21'>I don't see my question here!<br/></span></span>
<span class="c4">
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/nav-button-1-v-0.png\" name=\"nb21\"  />") </script>
</span>
</a>
<div id="reveal17" class="hidden">
<div class="c0 font4 fontcharcoal">Please call (402) 831 9555, or e-mail info@singteam.com, and we will be happy to answer any questions you may have!</div><div class="c0 font6 fonttitle fontblue und"><a href="javascript:unhide('reveal17');">x close</a></div>
</div><!--reveal17-->
</div>



</div><!--threecontainer-->
<div class="onecontainer one tcenter ccenter fonttitle fontcyan">
<div class="fontred">Thank you for visiting Sing Team America!</div>
<a href="completereg.php" onMouseOver="impress(22)" onMouseDown="dopress(22)" onMouseOut="unimpress(22)"><span id='link22'>Enroll in Sing Team</span></a><br/>
<a href="index.php?referer=FAQs" onMouseOver="impress(23)" onMouseDown="dopress(23)" onMouseOut="unimpress(23)"><span id='link23'>Return Home</span></a>
<script> document.write("<img src=\"" + $('ssize').innerHTML + "/images/header-bottom-1.png\" class=\"ccenter\" />") </script> 
</div>
</div><!--all-->
</div><!--supercontainer-->



</body>
</html>
