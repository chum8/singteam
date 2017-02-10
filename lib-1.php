<?php
function checkedandsanitized($a)	
	{	$a = stripslashes($a);
		$a = htmlentities($a);
		$a = strip_tags($a);
		$a = mysql_real_escape_string($a);
	return $a;	}


function cycle_ad($hit)
{
	$digit = substr($hit, strlen($hit) - 1, 1);
	switch ($digit)
	{
		case "0":
			$s = "0";
			break;
		case "1":
			$s = "2";
			break;
		case "2":
			$s = "0";
			break;
		case "3":
			$s = "1";
			break;
		case "4":
			$s = "3";
			break;
		case "5":
			$s = "0";
			break;
		case "6":
			$s = "1";
			break;
		case "7":
			$s = "2";
			break;
		case "8":
			$s = "0";
			break;
		case "9":
			$s = "1";
			break;
	}
	return $s;
}

function grab_score_or_blank($my_scores, $which_one, $limit)
{
	if ($which_one <= $limit) return $my_scores[$which_one];
	else return "";
}
function echo_audition()
{ ?>


<form action="audition.php" method="get" onSubmit="return validate(0, this)" >
<div class="two_columns" id="jumptoaudition">
What's your first name?<br/>
<input type="text" name="first_name" size="15" maxlength="30" /></div>
<div class="two_columns">
Select a city near you<br/>
<select name="city" size="1">
<option value="0"></option>
<option value="1">Grand Island, NE</option>
<option value="2">Hastings, NE</option>
<option value="3">Kearney, NE</option>
<option value="4">York, NE</option>
</select>
<br/><a href="missingcity.php">My city is not on the list!</a><br/>
</div>
<input type="image" name="submit_form" src="1088/images/button-audition.jpg" value="Audition Now!" class="audition_button" />
</form> 
<?php }

function echo_like_button()
{
?>

<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Funite.lead.sing&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=trebuchet+ms&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>

<?php	
	
}
function echo_social(){
	?>
<div class="social_column">
<span class="social">
<a href="http://www.twitter.com/@singteam"><img src="1088/images/twitter-bird-light-bgs.jpg"/></a><a href="http://www.facebook.com/unite.lead.sing"><img src="1088/images/f_logo.jpg"/></a></span><span class="social_button"><?php echo_like_button(); ?></span></div><?php
}

function render_the_scores($max_scores, $the_scores, $the_date)
{
	$stop_ = count($the_scores) - 1;
	$score_inc = -1;
	//for ($i = 0; $i <= $available_scores - 1; $i++) {$game_score = $sta->getascore($i); for ($j = 0; $j <= count($game_score) - 1; $j++) echo $game_score[$j];}

	for ($i = 0; $i <= ($max_scores / 2) - 2; $i++){
		echo "<span class=\"score_button_vertical_container\">";
		
		echo "<span class=\"score_button\">";
		echo "<img src=\"1088/images/score-button-up.jpg\" name=\"scorebox[]\" />";
		
		echo "<span class=\"impose_nw\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_);
		echo "<span class=\"impose_ne\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_)."</span></span>";
		echo "<span class=\"impose_sw\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_);
		echo "<span class=\"impose_se\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_)."</span></span>";
		echo "</span>";
		
		echo "<span class=\"score_button\">";
		echo "<img src=\"1088/images/score-button-up.jpg\" name=\"scorebox[]\" />";
		
		echo "<span class=\"impose_nw\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_);
		echo "<span class=\"impose_ne\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_)."</span></span>";
		echo "<span class=\"impose_sw\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_);
		echo "<span class=\"impose_se\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_)."</span></span>";
		echo "</span>";
		
		echo "</span>";
		
	}
	echo "<span class=\"score_button_vertical_container\">";
		
		echo "<span class=\"score_button\">";
		echo "<img src=\"1088/images/score-button-last-up.jpg\" name=\"scorebox_last[]\" />";
		
		echo "<span class=\"impose_nw\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_);
		echo "<span class=\"impose_ne\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_)."</span></span>";
		echo "<span class=\"impose_sw\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_);
		echo "<span class=\"impose_se\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_)."</span></span>";
		echo "</span>";
		
		echo "<span class=\"score_button\">";
		echo "<img src=\"1088/images/score-button-last-up.jpg\" name=\"scorebox_last[]\" />";
		
		echo "<span class=\"impose_nw\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_);
		echo "<span class=\"impose_ne\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_)."</span></span>";
		echo "<span class=\"impose_sw\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_);
		echo "<span class=\"impose_se\">".grab_score_or_blank($the_scores, ++$score_inc, $stop_)."</span></span>";
		echo "</span>";
		
		echo "</span>";
		
	
	
}
function echo_sitemap(){
?>
<div id="site_map_container" class="content_centered">
<img src="1088/images/line.jpg" class="line_pad"/>
<img src="1088/images/wallpaper-site-map.jpg" class="content_centered"/>

<div class="footer_full_column"><span class="footer_three">
<a href="index.php#all">singteam.com Home Page</a><br/><br/>
Thank you for visiting singteam.com, last updated 14 Aug, 2012.  Information is considered current through 31 Dec, 2012.
<br/>SingTeam<span class="super_script">TM</span> America.<br/>
Vanquish mediocrity.<!--
<a href="index.php">Home Page</a><br/>
<a href="index.php#jumptoaudition">Audition for SingTeam</a><br/>
<a href="missingcity.php">Request a SingTeam in your area</a>
</span><span class="footer_three">
<a href="infolight.php?iwantto=0">Overview of SingTeam</a><br/>
<a href="infolight.php?iwantto=1">Information for Students</a><br/>
<a href="infolight.php?iwantto=2">Information for Instructors</a><br/>
<a href="infolight.php?iwantto=3">Information for Venue Partners</a><br/>
<a href="infolight.php?iwantto=4">Information for Business Partners</a><br/-->
</span>
<span class="footer_three">
SingTeam<span class="super_script">TM</span> is a Christian organization seeking to honor the Lord Jesus Christ through the use of Biblically based content guidelines and the promotion of a Christian worldview.<br/><br/>
SingTeam<span class="super_script">TM</span>'s vision:  Singers everywhere, who are freed from an institutional mindset, to a life of expression, communication, enterprise and beauty, because they are on a SingTeam<span class="super_script">TM</span>.<br /><br/>
SingTeam<span class="super_script">TM</span>'s mission:  Glorify the Lord Jesus Christ by promoting a singing league that offers dreamers, leaders, creators, singers and actors a crucible to build something of beauty and value, far surpassing the institutional, "do-as-the-director-says" mindset that breeds mediocrity in other choral and singing opportunities.</span>
<span class="footer_three">
Contact SingTeam<span class="super_script">TM</span> at<br/>
(402) 831 9555<br/>
business hours:  9a-6p Central<br/><br/>
General Inquiries, Employment Inquiries, and Student Inquiries<br/>  info@singteam.com<br /><br/>
Advertising Inquiries<br/>  marketing@singteam.com<br/><br/>
Our mailing address<br/>
SingTeam America<br />
PO Box 888<br />
Hastings, NE  68902-0888
</span>
</div><img src="1088/images/line.jpg" class="line_pad"/>
<div class="footer_text">Website design and content copyright (c) 2012-2013, Douglas Michael Singer, LLC.  All Rights Reserved.<br/>  SingTeam<span class="super_script">TM</span> America is a division of Douglas Michael Singer, LLC, PO Box 888, Hastings, NE  68902-0888</div>
<img src="1088/images/wallpaper-bottom.jpg" class="content_centered" />
</div>

<?php }

?>
