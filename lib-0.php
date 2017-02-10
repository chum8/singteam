<?php
function load_it_all_up($page_name)
{
	require_once("lib-1.php");
	require_once("lib-2.php");

echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
echo "<html xmlns=\"http://www.w3.org/1999/xhtml\"   xmlns:fb=\"http://ogp.me/ns/fb#\">";
echo "<head>";
if (($page_name !="Welcome") and ($page_name !="FAQs") and ($page_name !="Tryouts")) {
?>

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
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
        echo "<meta name='description' content='Sing Team America | ".$page_name." | Vanquish mediocrity.' />";
        echo "<meta name='keywords' content='sing team, sing, team, sta, STA, singteam, singing, singer, show, choir, jazz, pop, music, nebraska, america, childrens, homeschool, home-school, childrens choir, compete' />";

	echo "<title>Sing Team America | ".$page_name." | Vanquish mediocrity.</title>";

	echo "<script type=\"text/javascript\" src=\"validator-1.js\"></script>";
	echo "<script type=\"text/javascript\" src=\"screenwidth-1.js\"></script>";
	echo "<link href=\"1088.css\" rel=\"stylesheet\" type=\"text/css\" />";
	echo "<style type=\"text/css\">";
	echo "@import: url('dynamick.css')";
	echo "</style>";}
else {
?>
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

sW = window.innerWidth != null? window.innerWidth: document.body != null? document.body.clientWidth:null;

//if the width is greater than = to 1080, allow for three columns
if (sW > maxwidth - 1) {	
	addCSSRule("#supercontainer", "width: " + maxwidth + "px")
	addCSSRule("#all", "width: " + maxwidth + "px")
	addCSSRule("#all .onecontainer", "width: " + maxwidth + "px")
	sW = maxwidth
}
else {
	addCSSRule("#supercontainer", "width: " + sW + "px")
	addCSSRule("#all", "width: " + sW + "px")
	addCSSRule("#all .onecontainer", "width: " + sW + "px")
	
}

if (sW > 1079){
	addRules("#all .one", sW)
	addRules("#all .two", sW / 2)
	addRules("#all .three", sW / 3)
	addRules("#all .twocontainer", sW / 2)
	addRules("#all .threecontainer", sW / 3)
	prepimages("l")
	addCSSRule("#all", "font-size: " + (sW * fontpercentagel) + "px")
}
//if the width is greater than = to 720, allow for two columns
else if ((sW < 1080) && (sW > 719)) {
	addRules("#all .one", sW)
	addRules("#all .two", sW / 2)
	addRules("#all .three", sW / 2)
	addRules("#all .twocontainer", sW / 2)
	addRules("#all .threecontainer", sW / 2)
	prepimages("m")
	addCSSRule("#all", "font-size: " + (sW * fontpercentagem) + "px")
}

//else, sorry! just one column
else if (sW < 720) {
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
	$('link10').innerHTML = "<span class=\"fontblack und\">How are teams divided? By age? Talent?</span>"}	
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
	$('link10').innerHTML = "<span class=\"fontred und\">How are teams divided? By age? Talent?</span>"}	
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
	$('link10').innerHTML = "How are teams divided? By age? Talent?"}	
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
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
echo "<meta name='description' content='Sing Team America | ".$page_name. " | Vanquish mediocrity.' />";
echo "<meta name='keywords' content='sing team, sing, team, sta, STA, singteam, singing, singer, show, choir, jazz, pop, music, nebraska, america, childrens, homeschool, home-school, childrens choir, compete' />";

echo "<title>Sing Team America | ".$page_name. " | Vanquish mediocrity.</title>";

echo "<script type=\"text/javascript\" src=\"validator-1.js\"></script>";

}
echo "</head>";

}

function load_it_all_up_redirect($page_name)
{
	require_once("lib-1.php");
	require_once("lib-2.php");
}

?>