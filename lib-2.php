<?php



class human
{
	private $entry = array();
	private $ad_data = array();
	private $renderlogin = array("Type", "username", "password", "Pointer to ID"); //4
	private $renderad = array("Type", "ID", "# in cycle", "image link", "href", "Pointer to Business Partner ID"); //4
	private $db_session = "";
		/*Database pointers


		PERSON
		SEASON

		market -> person
		login -> person
		payment -> person

		business -> person
		transaction -> business

		judge -> person
		stli -> person, division, venue
		student -> person, parent 1, parent 2, division, stli, team

		nation -> person
		region -> person, nation
		state -> person, region
		conference -> person, state, region
		division -> person, conference, state, region
		venue -> person, division, conference, state, region

		team -> season, stli, division, conference, state, region
		competition -> season, venue, business, division, conference, state, region
		game -> season, team+, judge+, stli+, division, competition
		score -> season, team, game, student+, judge+, stli+
		judge -> person

		ad -> business
		*/
	//variables for storing data
	private $db_prefix = "douglas6_";//old = s8p2uq9m_
	private $db_malegender = "m";
	private $db_femalegender = "f";
	private $db_yes = "y";
	private $db_no = "n";
	private $db_yearoffset = 1991; //the number that must be added to form value to derive the correct year
	private $db_current_pointer = "";
	//variables having to do with persons
	private $market = array('markettexti' => array("first name", "last name", "phone 1", "e-mail 1", "pointer person", "parent guardian 1", "parent guardian 2", "does which sports", "does which other", "goes which other", "likes which other", "musical experience", "in own words", "promotion code", "audition city"),  'marketdobi' => array("dob"), 'marketgenderi' => "gender", 'marketselecti' => array("how heard", "introvert extrovert"), 'marketchecki' => array("does theater", "does dance", "does ap", "does choir", "does band", "does 4h", "does ffa", "does fbla", "does sife", "does awana", "does sports",  "does other", "goes youtube", "goes facebook", "goes twitter", "goes myspace", "goes wikipedia", "goes google", "goes yahoo", "goes other",  "likes video games", "likes board games", "likes movies", "likes programming", "likes woodworking", "likes leatherworking", "likes carpentry", "likes photography", "likes sewing", "likes knitting", "likes graphic design", "likes art drawing", "likes theater drama", "likes farming", "likes gardening", "likes livestock", "likes mechanical", "likes writing", "likes other",  "wants dance team", "wants spirit team", "wants music team", "wants promotions team", "wants design team", "wants team captain"));
	private $busmarket = array('texti' => array("type", "pointer business", "business name", "contact person", "phone", "e-mail", "street", "city", "state", "zip"), 'checki' => array("interested advertiser", "interested sponsor", "interested donor"), 'dobi' => array("date contacted"));
	private $shortmarket = array('texti' => array("name", "city", "contact 1", "referer"), 'genderi' => "gender", 'selecti' => array("age"), 'checki' => array("pop rb", "jazz broadway", "art song chamber music", "dance team", "spirit team", "promotions team", "music team", "design team"));
	private $person = array('persontexti' => array("first name", "last name", "phone 1", "e-mail 1", "id", "prefix", "middle name", "suffix", "ssn", "phone 2", "e-mail 2", "website", "street", "city", "state", "zip"), 'personchecki' => array("phone 1 texting", "phone 2 texting"), 'persongenderi' => "gender",  'persondobi' => array("dob"));
	//private $student = array('texti' => array("id", "active", "pointer person", "pointer parent 1", "pointer parent 2", "pointer stli", "pointer team", "parent 1 is guardian", "parent 2 is guardian", "has letter", "list of STA honors", "list of competition honors",  "overall team wins", "overall team losses", "team highest achievement", "solo voice wins", "solo voice points", "solo sight wins", "solo sight points", "solo rhythm wins", "solo rhythm points", "solo improv wins", "solo improv points", "career best points", "team assignment history", "list of major contributions", "suspension record", "comments"), 'selecti' => array("current level", "current prestige", "current medal"), 'dobi' => array("paid through")); 
	private $student = array('studenttexti' => array("id", "pointer person", "pointer division"), 'studentchecki' => array("parent 1 is guardian", "parent 2 is guardian"));
	private $stli = array('texti' => array("id", "pointer person", "pointer division", "pointer venue 1","pointer venue 2","pointer venue 3","pointer venue 4","pointer venue 5", "citizen status", "religion", "signed covenant", "application file", "resume file", "background check", "rhythm test", "general test", "interview notes 1", "interview notes 2", "audition notes 1", "audition notes 2", "other career notes", "keyboard", "regular season wins", "regular season losses", "postseason wins", "postseason losses", "conference championship wins", "conference championship losses", "state championship wins", "state championship losses", "regional championship wins", "regional championship losses", "nation championship wins", "national championship losses", "awards", "total students taught", "total registration earnings", "total advertise or sponsor earnings", "total bonus earnings", "students of note", "current teaching hours", "current available hours", "license suspended revoked history", "comments"), 'dobi' => array("license granted", "license expires"), 'selecti' => array("license type"));
	private $business = array('texti' => array("id", "pointer person", "name", "description", "phone 1", "phone 2", "e-mail 1", "e-mail 2", "website", "street", "city", "state", "zip", "total funds as advertising", "total funds as sponsorship", "total funds as donation", "executive club status", "points earned", "comments"), 'dobi' => array("initial date", "final date"), 'selecti' => array("client type", "donor type"));
	//variables having to do with places
	private $region = array('texti' => array("id", "pointer person", "pointer nation", "name"));
	private $state = array('texti' => array("id", "pointer person", "pointer region", "name"));
	private $conference = array('texti' => array("id", "pointer person", "pointer state", "pointer region", "name"));
	private $division = array('texti' => array("id", "pointer person", "pointer conference", "pointer state", "pointer region", "name", "counties", "cities", "neighborhoods"));
	private $request = array('texti' => array("city", "state", "first name", "last name", "phone 1", "e-mail 1", "explanation"), 'selecti' => array("i am an"));
	private $venue = array('texti' => array("id", "type", "active", "pointer person", "pointer division", "pointer conference", "pointer state", "pointer region", "name", "waiver signed",  "quick contact name", "phone 1", "phone 2", "e-mail", "website", "emergency contact", "street", "city", "state", "zip", "keys distributed", "access sunday", "access monday", "access tuesday", "access wednesday", "access thursday", "access friday", "access saturday", "access exceptions", "room 1 location", "room 1 capacity", "room 1 keyboard", "room 2 location", "room 2 capacity", "room 2 keyboard", "room 3 location", "room 3 capacity", "room 3 keyboard", "competition 1 location", "competition 1 capacity", "competition 1 keyboard",  "competition 1 sound engineer", "competition 2 location", "competition 2 capacity", "competition 2 keyboard",  "competition 2 sound engineer", "equipment location"), 'dobi' => array("initial meeting", "contract begin", "contract end"), 'checki' => array("competition 1 has pa","competition host", "permission display banner", "permission distribute material", "permission recruiting booth", "permission partners advertise","competition 2 has pa"), 'selecti' => array("type of venue"));
	//variables having to do with things
	private $team = array('texti' => array("id", "type", "active", "pointer season", "pointer stli", "pointer division", "pointer conference", "pointer state", "pointer region", "name", "abbreviation", "location", "level", "logo file",  "team size history", "solo voice wins", "solo voice points", "solo sight wins", "solo sight points", "solo rhythm wins", "solo rhythm points", "solo improv wins", "solo improv points", "head voice wins", "head voice points", "head sight wins", "head sight points", "head rhythm wins", "head rhythm points", "head improv wins", "head improv points", "career best points ", "career regular season wins", "career regular season losses", "postseason wins", "postseason losses", "conference championship wins", "conference championship losses", "state championship wins", "state championship losses", "regional championship wins", "regional championship losses", "national championship wins",  "national championship losses", "awards won", "comments"), 'dobi' => array("founded", "disbanded"));
	private $score = array('texti' => array("id", "pointer season", "pointer game", "pointer team win", "pointer team lose", "pointer student win", "pointer student lose", "pointer stli win", "pointer stli lose", "pointer judge 1", "pointer judge 2", "pointer judge 3", "student win score", "student win comments", "student lose score", "student lose comments", "comments"));
	private $competition = array('texti' => array("id", "type", "pointer season", "pointer venue", "pointer business", "pointer division", "pointer conference", "pointer state", "pointer region", "pointer entity 1",  "pointer entity 2", "pointer entity 3", "pointer entity 4", "pointer entity 5", "pointer entity 6", "pointer entity 7", "entity 1 points", "entity 1 placement", "entity 1 comments", "entity 2 points", "entity 2 placement", "entity 2 comments", "entity 3 points", "entity 3 placement", "entity 3 comments", "entity 4 points", "entity 4 placement", "entity 4 comments", "entity 5 points", "entity 5 placement", "entity 5 comments", "entity 6 points", "entity 6 placement", "entity 6 comments", "entity 7 points", "entity 7 placement", "entity 7 comments")); //32
	private $game = array('texti' => array("id", "pointer season", "pointer team 1", "pointer team 2", "pointer judge 1", "pointer judge 2", "pointer judge 3", "pointer stli 1", "pointer stli 2", "pointer competition", "attendance", "team 1 abr", "team 1 score", "team 2 abr", "team 2 score"), 'dobi' => array("date"), 'selecti' => array("game type"));
	private $veryshortmarket = array('texti' => array("name", "e-mail"));
	//variable to store scores pulled out of the database for purposes of displaying on home page
	private $games = array();

	//Now follow DB functions
	//These functions return the correct host, username, password, and database name
	private function get_db_host($db_type){return 'localhost';}
	private function get_db_user($db_type){return $this->db_prefix.'dsinger';} //new='stadoug'
	private function get_db_password($db_type){return 'Ll!ONgFoR272';}
	private function get_db_database($db_type) {return  $this->db_prefix.'stadoug';} //new='sing_team_america'
	//This HIGHLY IMPORTANT function returns the right variable for the addtodb_ function to create an usable query
	private function get_db_table($db_type)
	{
	switch ($db_type)
		{	
			case "market":			$db = $this->market;		break;
			case "shortmarket":		$db = $this->shortmarket;	break;
			case "stli":			$db = $this->stli;			break;
			case "business":		$db = $this->business;		break;
			case "region":			$db = $this->region;		break;
			case "state":			$db = $this->state;			break;
			case "conference":		$db = $this->conference;	break;
			case "division":		$db = $this->division;		break;
			case "request":			$db = $this->request;		break;
			case "game":			$db = $this->game;			break;			
			case "venue":			$db = $this->venue;			break;
			case "businessmarket": 	$db = $this->busmarket;		break;
			case "person":			$db = $this->person;		break;
			case "student":			$db = $this->student;		break;
			case "veryshortmarket":	$db = $this->veryshortmarket;	break;
		/*case 0:			case "person":			$db = 'person';				break;
			case 2:			case "venue":			case "venue partner":		$db = 'venue';				break;			
			case 3:			case "stli":			case "STLI":				$db = 'stli';				break;
			case 4:			case "student":			$db = 'student';			break;
			case 5:			case "payment":			$db = 'payment';			break;
			case 6:			case "competition":		$db = 'competition';		break;
			case 7:			case "team":			$db = 'team';				break;
			case 8:			case "game":			case "games":				$db = 'game';				break;			
			case 9:			case "business":		case "business partner":	case "businesspartner":		$db = 'business';				break;
			case 10:		case "login":			$db = 'login';				break;
			case 11:		case "ad":				$db = 'ad';					break;*/
		}
	return $db;	
	}
	//This gets the database rolling by creating a new database class called $db_session
	public function initiate_mysql($db)	{
		$this->db_session = new mysqli($this->get_db_host($db), $this->get_db_user($db), $this->get_db_password($db));
		
		if (!$this->db_session) return false; //die("FATAL DATABASE ERROR! Unable to access database because of: " . mysqli_error()); //return false; 
		if (!$this->db_session->select_db($this->get_db_database($db))) return false;// die("no bueno because of: " . mysqli_error($this->db_session)); //return false; or
		return true;
	}
	public function retrievecurrentpointer($db_)
	{	$entry_pointer = $this->tryquery("SELECT current FROM pointer WHERE name = '$db_'");
		$p = $entry_pointer->fetch_row();
		$this->db_current_pointer = $p[0];
		return $p[0];
	}
	public function augmentandstorecurrentpointer($db_)
	{	$this->db_current_pointer++;
		$p = $this->db_current_pointer;
		$this->tryquery("UPDATE pointer SET current = '$p' WHERE name = '$db_'");
		return $p;
	}

	//This is the master function that constructs the query to try
	public function addtodb_($data_, $db_, $doprepend_)
	{	//echo "made it into addtodb_ function";
		//$db_ is the database name, i.e. "market".  $dbv_ is the correct variable to access database info, i.e. $market
		$dbv_ = $this->get_db_table($db_);
		if ($doprepend_) $prepend_ = $db_; else $prepend_ = "";			 

		$wevedata_ = false; //sometimes a query won't actually get written, in which case it would be really nice if it weren't attempted later on
	
		$queryleft_ = "INSERT INTO ".$db_."("; //start the left hand part of the query
		$queryright_ = " VALUES("; //start the right hand part of the query
		//first, get the gender field set to the right value
		if (array_key_exists($prepend_.'genderi', $data_) and ($this->good($data_[$prepend_.'genderi']))) {
			$queryleft_ .="`{$dbv_[$prepend_.'genderi']}`,";
			$queryright_ .= "'{$this->extractgender($this->antiseptic($data_[$prepend_.'genderi'][0]))}',";
			$wevedata_ = true; //ok, we have a legit query now
		}
		//second, format the dob field correctly
		if (array_key_exists($prepend_.'dobi', $data_) and ($this->good($data_[$prepend_.'dobi']))) {
			for ($i=0; $i <= count($data_[$prepend_.'dobi']) - 1; $i=$i+3){
				$queryleft_ .="`{$dbv_[$prepend_.'dobi'][$i]}`,";
				$queryright_ .= "'{$this->extractdob($this->antiseptic($data_[$prepend_.'dobi'][$i]),$this->antiseptic($data_[$prepend_.'dobi'][$i+1]),$this->antiseptic($data_[$prepend_.'dobi'][$i+2]))}',";
		}
		$wevedata_ = true; //ok, we have a legit query now
		}
		//third, deal with all text input
		if (array_key_exists($prepend_.'texti', $data_) and ($this->good($data_[$prepend_.'texti']))) {
			for ($i=0; $i <= count($data_[$prepend_.'texti']) - 1; $i++){
				$queryleft_ .="`{$dbv_[$prepend_.'texti'][$i]}`,";
				$queryright_ .="'{$this->antiseptic($data_[$prepend_.'texti'][$i])}',";
			}
			$wevedata_ = true; //ok, we have a legit query now
		}
		//fourth, deal with select input
		if (array_key_exists($prepend_.'selecti', $data_) and ($this->good($data_[$prepend_.'selecti']))) {
			for ($i=0; $i <= count($data_[$prepend_.'selecti']) - 1; $i++){
				$queryleft_ .="`{$dbv_[$prepend_.'selecti'][$i]}`,";
				$queryright_ .="'{$this->antiseptic($data_[$prepend_.'selecti'][$i])}',";
			}
			$wevedata_ = true; //ok, we have a legit query now
		}
		//finally, deal with checkboxes
		if (array_key_exists($prepend_.'checki', $data_) and ($this->good($data_[$prepend_.'checki']))) {

			for ($i=0; $i <= count($data_[$prepend_.'checki']) - 1; $i++){
				$queryleft_ .="`{$dbv_[$prepend_.'checki'][$this->antiseptic($data_[$prepend_.'checki'][$i])]}`,";
				$queryright_ .="'{$this->db_yes}',";
			}
			$wevedata_ = true; //ok, we have a legit query now
		}
		
		//the following line pastes the two queries we've been building together, and replaces the final , with a ) then queries the DB, returning true if successful
		
		$fullquery_ = $this->dealwithlastcharacter($queryleft_, ",",")") .$this->dealwithlastcharacter($queryright_, ",",")");	
		if ($wevedata_) {//echo $fullquery_;
			return $this->tryquery_with_error_handling($fullquery_);
			}
		
	}
	//This nice little function cleans up strings to make them safe to store in MySQL
	private function antiseptic($a)	
	{	$a = stripslashes($a);
		$a = htmlentities($a);
		$a = strip_tags($a);
		$a = $this->db_session->real_escape_string($a);
	return $a;	}
	//This nice little function returns true if a variable is ready for processing
	private function good($a) {
		if (isset($a)) for ($i = 0; $i <= count($a) - 1; ++$i)	if ($a[$i] != "") {return true;} 
		return false;
	}
	//This function extracts the dob in correct format from user input fields
	private function extractdob($m, $d, $y) {
		if (strlen($m) <2) $m = "0".$m;
		if (strlen($d) <2) $d = "0".$d;
		$y = $y+$this->db_yearoffset;
		return $y."-".$m."-".$d;}
	//This function extracts the gender in correct format from user input fields
	private function extractgender($a) {if ($a == "1") return $this->db_malegender; else return $this->db_femalegender;}
	//This function changes something like    VALUES('bad', 'worse', 'worst',   to   VALUES('bad', 'worse', 'worst')
	private function dealwithlastcharacter($s, $c_trim, $c_new)
	{		$s = rtrim($s, $c_trim);
			$s .= $c_new;
			return $s;	}
	//And last but not least, this HIGHLY IMPORTANT function trys the query that we just constructed with addtodb_
	public function tryquery($cur_query) {
		//echo $cur_query; //uncomment if need more debugging
		return $this->db_session->query($cur_query);
	}
	public function tryquery_with_error_handling($cur_query) {
		//echo $cur_query; //uncomment if need more debugging
		if ($this->db_session->query($cur_query)) $this->db_session->query("INSERT INTO `qlog__` (`goodqry`) VALUE ('".$this->antiseptic($cur_query)."')");
		else $this->db_session->query("INSERT INTO `qlog__` (`error`) VALUE ('".$this->antiseptic($cur_query)."')");
		return true;
	}
	
	public function last_error() {echo $this->db_session->error;}

	//updates the hits on the database.  How nice.
	function update_hits($hit_file, $ref_link) {
	if($kount = $this->tryquery("SELECT `count` FROM hits WHERE `hitpage` = '$hit_file' AND `camefrom` = '$ref_link'")){
		if(!$k = $kount->fetch_row()) {
			$k[0] = $this->generate_counter($hit_file, $ref_link);
		}
	}
	else {
		$k[0] = $this->generate_counter($hit_file, $ref_link);
	}	
	
	
	$k[0]++;
	$this->tryquery("UPDATE hits SET `count` = '$k[0]' WHERE `hitpage` = '$hit_file' AND `camefrom` = '$ref_link'");

//	echo $k[0];
	if($kount2 = $this->tryquery("SELECT `count` FROM hits WHERE `hitpage` = '$hit_file' AND `camefrom` = 'all'")){
		if(!$k2 = $kount2->fetch_row()) {
			$k2[0] = $this->generate_counter($hit_file, 'all');
		}
	}
	else {
		$k2[0] = $this->generate_counter($hit_file, 'all'); 
	}

	$k2[0]++;
	$this->tryquery("UPDATE hits SET `count` = '$k2[0]' WHERE `hitpage` = '$hit_file' AND `camefrom` = 'all'");
}
function generate_counter($hit_file, $ref_link) {
	$this->tryquery("INSERT INTO hits(`count`, `hitpage`, `camefrom`) VALUES(0, '".$hit_file."', '".$ref_link."')");
	return 0;
}	
 /*	function update_hits($hit_file, $ref_link)
	{	$kount = $this->tryquery("SELECT `count` FROM hits WHERE `hitpage` = '$hit_file' AND `camefrom` = '$ref_link'");
		$k = $kount->fetch_row();
		$k[0]++;
		$this->tryquery("UPDATE hits SET `count` = '$k[0]' WHERE `hitpage` = '$hit_file' AND `camefrom` = '$ref_link'");
		
		$kount2 = $this->tryquery("SELECT `count` FROM hits WHERE `hitpage` = '$hit_file' AND `camefrom` = 'all'");
		$k2 = $kount2->fetch_row();
		$k2[0]++;
		$this->tryquery("UPDATE hits SET `count` = '$k2[0]' WHERE `hitpage` = '$hit_file' AND `camefrom` = 'all'");
		return $k2[0];
	}
*/
	
	
	
	public function buildscores(/*date, division, team1, team2*/)
	{	if (func_get_args()) {
			unset($this->games);
			$cur_query = "SELECT `id` FROM game WHERE";
			$was_before=false;
			$myargs = func_get_args();
			if (array_key_exists(0, $myargs) AND $myargs[0] !="") {
				$cur_query.= " `date`='".$myargs[0]."'";
				$was_before=true;}
				
			if (array_key_exists(1, $myargs) AND $myargs[1] !="")  {
				if ($myargs[1] !="") {
				$cur_query.= $this->issueand($was_before)." `pointer division`='".$myargs[1]."'";
				$was_before=true;}} 
				
			if (array_key_exists(2, $myargs) AND $myargs[2] !=""){
				$cur_query.= $this->issueand($was_before)." `team 1`='".$myargs[2]."'";
				$was_before=true;}
				
			if (array_key_exists(3, $myargs) AND $myargs[3] !="") $cur_query.= $this->issueand($was_before)." `team 2`='".$myargs[3]."'";

		$game_id_resource = $this->db_session->query($cur_query);
		$rows_1 = $game_id_resource->num_rows;
			for ($i = 0; $i <= $rows_1 - 1; $i++) {
				$t = $game_id_resource->fetch_row();
				$score_resource = $this->db_session->query("SELECT `team 1 abr`, `team 1 score`, `team 2 abr`, `team 2 score` FROM game WHERE `id`='". $t[0] ."'");
				$this->games[$i] = $score_resource->fetch_row();

			}
		return $rows_1;
		}
		else return false;
	}

	public function getascore($v1) {
		$record = array();
		for ($i = 0; $i <= 3; $i++) $record[$i] = $this->games[$v1][$i];
		return $record;
	}
	private function issueand($bool){if ($bool) return " AND"; else return "";}
	
	public function renderentries($how)
	{
		switch ($how)
		{	case 0:			case "person":				$renderer = $this->renderperson;				break;
			case 1:			case "region":				$renderer = $this->renderregion;				break;
			case 2:			case "venue":				case "venue partner":							$renderer = $this->rendervenue;				break;
			case 3:			case "stli":				case "STLI":									$renderer = $this->renderstli;				break;
			case 4:			case "student":				$renderer = $this->renderstudent;				break;
			case 5:			case "payment":				$renderer = $this->renderpayment;				break;
			case 6:			case "competition":			$renderer = $this->rendercompetition;			break;
			case 7:			case "team":				$renderer = $this->renderteam;					break;
			case 8:			case "game":				case "games":									$renderer = $this->rendergame;				break;
			case 9:			case "business":			case "business partner":						case "businesspartner":						$renderer = $this->renderbusinesspartner;				break;
			case 10:		case "login":				$renderer = $this->renderlogin;					break;
			case 11:		case "ad":					$renderer = $this->renderad;					break;
		}

		for ($i = 0; $i <= count($this->entry) - 1; $i++)
		{
			if ($renderer[$i]) echo $renderer[$i].": ".$this->entry[$i]."<br />"; else echo "not defined: ".$this->entry[$i]."<br />";
		}
	}
	
	public function setcurrentad($ad_num)
	{	
		$ad_id_resource = $this->db_session->query("SELECT `file`, `href` FROM ad WHERE `priority`='". $ad_num ."'");
		if ($ad_id_resource) {
			unset($this->ad_data);
			$this->ad_data = $ad_id_resource->fetch_row();
			return true;
		}
		return false;
	}
	
	public function getadimagelink(){return $this->ad_data[0];}
	public function getadhref() {return $this->ad_data[1];}

	public function extractcount() {return count($this->entry);}
	public function extractitem($n) {return $this->entry[$n];}	
	public function addentry() 
	{	
		$num_args = func_num_args();
		$newentry = func_get_args();
		for ($i = 0; $i <= $num_args-1; $i++) $this->entry[]=$newentry[$i];
	}
	public function clean() {$this->entry = NULL;}


}?>
