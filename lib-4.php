<?php
function get_response($q){
	switch ($q)	{
		case 0: 	$myq = "How do you like to sing?";									break;
		case 1:		$myq = "With lots of emotion and expression";						break; 
		case 2:		$myq = "In a more contemplative fashion";							break; 
		
		case 3:		$myq = "Which is a more expressive way of singing?";				break;
		case 4:		$myq = "Holding a note for a long time";							break;
		case 5: 	$myq = "Singing a soulful, florid tune";							break;
		case 6:		$myq = "Which is the stronger emotion?";							break;
		case 7:		$myq = "Love";														break;
		case 8:		$myq = "Grief";														break;
		case 9:		$myq = "Would your song be";										break;
		case 10:	$myq = "sung to <span class=\"emphasize\">someone</span>?";			break;		
		case 11:	$myq = "sung about some <span class=\"emphasize\">thing</span>?";	break;

		case 12:	$myq = "What atmosphere is better for contemplation?";				break;
		case 13:	$myq = "Outdoors: Starry nights, beautiful woods, etc.";			break;
		case 14:	$myq = "Indoors: Candle-lit tables, spacious cathedrals, etc.";		break;
		case 15:	$myq = "Do you feel a deeper connection";							break;
		case 16:	$myq = "With seasons (fall, spring, etc.)?";						break;
		case 17:	$myq = "With times of day (sunset, midnight, etc.)?";				break;
		case 18:	$myq = "When you are nostalgic about something past you become";	break;
		case 19:	$myq = "A little tearful and sad";									break;
		case 20:	$myq = "Peaceful and happy";										break;
	}
	return $myq;
}
function get_color($q) {
	switch ($q) {
		case 0:		$myq = "Your singing color is <br/><span class=\"center_text\"><font color=#f80f0f size=30>vermillion</font></span><br/> Passionate. Emotional. Dramatic. These words describe your voice at its best.";																			break;
		case 1:		$myq = "Your singing color is <br/><span class=\"center_text\"><font color=#0006f8 size=30>azure</font></span><br/>  Your voice is the desperate plea of the soul, expressing depths and heights of emotion that words cannot express.";											break;
		case 2:		$myq = "Your singing color is <br/><span class=\"center_text\"><font color=#86a526 size=30>lime</font></span><br/>  You rock, and your audience knows it!  You sing your best when you sing for others, and you know how to add excitement to any piece of music.";											break;
		case 3:		$myq = "Your singing color is <br/><span class=\"center_text\"><font color=#242424 size=30>ebony</font></span><br/>  You use music like ink, painting edgy, sharp, and soulful portraits with your voice.";																			break;
		case 4:		$myq = "Your singing color is <br/><span class=\"center_text\"><font color=#cc4c76 size=30>rose</font></span><br/>  Bombast? Forget that. Refinement, class, subtle beauty, sensitivity, and perception are hallmarks of your singing.";											break;
		case 5:		$myq = "Your singing color is <br/><span class=\"center_text\"><font color=#037318 size=30>emerald</font></span><br/>  You use your voice like a photographer uses a camera, capturing the essence of a fleeting moment, and bringing the imagination of your audience to life.";	break;
		case 6:		$myq = "Your singing color is <br/><span class=\"center_text\"><font color=#150d7d size=30>indigo</font></span><br/>  Your singing is like the greatest acting: it invites curiosity, provokes thought, stirs empathy, and takes your audience out of their comfort zone.";		break;
		case 7:		$myq = "Your singing color is <br/><span class=\"center_text\"><font color=#cec8a9 size=30>cream</font></span><br/>  Soothing. Cheerful. Comforting. Heartwarming. Your voice leaves everyone beaming from ear to ear."; 															break;
		}	
	return $myq;
}
?>