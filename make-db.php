<?php
include("db-1.inc");
//$firstGenerate = true; //'true' if database has not yet been created
$firstGenerate = false; //'false' if database has been created and required task is creating new tables
$d = new dbTasks;
if (!$d->generate()) {
	renderIt();
}
else renderIt();
/*
if ($firstGenerate) { 
	$d = new dbTasks;
	echo $d->generate(); //This generates the database.  Only needed the first time the program is executed.
}
else buildTables();
 */
function renderIt() {
	$hits = array("hits", "count", "hitpage", "camefrom");
	buildTables("hits", $hits);

	$market = array("first name", "last name", "phone 1", "e-mail 1", "pointer person", "parent guardian 1", "parent guardian 2", "does which sports", "does which other", "goes which other", "likes which other", "musical experience", "in own words", "promotion code", "audition city", "dob", "gender", "how heard", "introvert extrovert", "does theater", "does dance", "does ap", "does choir", "does band", "does 4h", "does ffa", "does fbla", "does sife", "does awana", "does sports",  "does other", "goes youtube", "goes facebook", "goes twitter", "goes myspace", "goes wikipedia", "goes google", "goes yahoo", "goes other",  "likes video games", "likes board games", "likes movies", "likes programming", "likes woodworking", "likes leatherworking", "likes carpentry", "likes photography", "likes sewing", "likes knitting", "likes graphic design", "likes art drawing", "likes theater drama", "likes farming", "likes gardening", "likes livestock", "likes mechanical", "likes writing", "likes other",  "wants dance team", "wants spirit team", "wants music team", "wants promotions team", "wants design team", "wants team captain");
	buildTables("market", $market);

	 $busmarket = array("type", "pointer business", "business name", "contact person", "phone", "e-mail", "street", "city", "state", "zip", "interested advertiser", "interested sponsor", "interested donor", "date contacted");
	buildTables("busmarket", $busmarket);

	 $shortmarket = array("name", "city", "contact 1", "referer", "gender", "age", "pop rb", "jazz broadway", "art song chamber music", "dance team", "spirit team", "promotions team", "music team", "design team");
	buildTables("shortmarket", $shortmarket);

	 $person = array("first name", "last name", "phone 1", "e-mail 1", "id", "prefix", "middle name", "suffix", "ssn", "phone 2", "e-mail 2", "website", "street", "city", "state", "zip", "phone 1 texting", "phone 2 texting", "gender", "dob");
	buildTables("person", $person);

	// $student = array('texti' => array("id", "active", "pointer person", "pointer parent 1", "pointer parent 2", "pointer stli", "pointer team", "parent 1 is guardian", "parent 2 is guardian", "has letter", "list of STA honors", "list of competition honors",  "overall team wins", "overall team losses", "team highest achievement", "solo voice wins", "solo voice points", "solo sight wins", "solo sight points", "solo rhythm wins", "solo rhythm points", "solo improv wins", "solo improv points", "career best points", "team assignment history", "list of major contributions", "suspension record", "comments"), 'selecti' => array("current level", "current prestige", "current medal"), 'dobi' => array("paid through")); 
	 $student = array("id", "pointer person", "pointer division", "parent 1 is guardian", "parent 2 is guardian");
	buildTables("student", $student);

	 $stli = array("id", "pointer person", "pointer division", "pointer venue 1","pointer venue 2","pointer venue 3","pointer venue 4","pointer venue 5", "citizen status", "religion", "signed covenant", "application file", "resume file", "background check", "rhythm test", "general test", "interview notes 1", "interview notes 2", "audition notes 1", "audition notes 2", "other career notes", "keyboard", "regular season wins", "regular season losses", "postseason wins", "postseason losses", "conference championship wins", "conference championship losses", "state championship wins", "state championship losses", "regional championship wins", "regional championship losses", "nation championship wins", "national championship losses", "awards", "total students taught", "total registration earnings", "total advertise or sponsor earnings", "total bonus earnings", "students of note", "current teaching hours", "current available hours", "license suspended revoked history", "comments", "license granted", "license expires", "license type");
	buildTables("stli", $stli);

	 $business = array("id", "pointer person", "name", "description", "phone 1", "phone 2", "e-mail 1", "e-mail 2", "website", "street", "city", "state", "zip", "total funds as advertising", "total funds as sponsorship", "total funds as donation", "executive club status", "points earned", "comments", "initial date", "final date", "client type", "donor type");
	buildTables("business", $business);
	
	//variables having to do with places
	$region = array("id", "pointer person", "pointer nation", "name");
	buildTables("region", $region);

	$state = array("id", "pointer person", "pointer region", "name");
	buildTables("state", $state);

	$conference = array("id", "pointer person", "pointer state", "pointer region", "name");
	buildTables("conference", $conference);

	 $division = array("id", "pointer person", "pointer conference", "pointer state", "pointer region", "name", "counties", "cities", "neighborhoods");
	buildTables("division", $division);

	 $request = array("city", "state", "first name", "last name", "phone 1", "e-mail 1", "explanation", "i am an");
	buildTables("request", $request);

	 $venue = array("id", "type", "active", "pointer person", "pointer division", "pointer conference", "pointer state", "pointer region", "name", "waiver signed",  "quick contact name", "phone 1", "phone 2", "e-mail", "website", "emergency contact", "street", "city", "state", "zip", "keys distributed", "access sunday", "access monday", "access tuesday", "access wednesday", "access thursday", "access friday", "access saturday", "access exceptions", "room 1 location", "room 1 capacity", "room 1 keyboard", "room 2 location", "room 2 capacity", "room 2 keyboard", "room 3 location", "room 3 capacity", "room 3 keyboard", "competition 1 location", "competition 1 capacity", "competition 1 keyboard",  "competition 1 sound engineer", "competition 2 location", "competition 2 capacity", "competition 2 keyboard",  "competition 2 sound engineer", "equipment location", "initial meeting", "contract begin", "contract end", "competition 1 has pa", "competition host", "permission display banner", "permission distribute material", "permission recruiting booth", "permission partners advertise","competition 2 has pa", "type of venue");
	buildTables("venue", $venue);

	//variables having to do with things
	 $team = array("id", "type", "active", "pointer season", "pointer stli", "pointer division", "pointer conference", "pointer state", "pointer region", "name", "abbreviation", "location", "level", "logo file",  "team size history", "solo voice wins", "solo voice points", "solo sight wins", "solo sight points", "solo rhythm wins", "solo rhythm points", "solo improv wins", "solo improv points", "head voice wins", "head voice points", "head sight wins", "head sight points", "head rhythm wins", "head rhythm points", "head improv wins", "head improv points", "career best points", "career regular season wins", "career regular season losses", "postseason wins", "postseason losses", "conference championship wins", "conference championship losses", "state championship wins", "state championship losses", "regional championship wins", "regional championship losses", "national championship wins",  "national championship losses", "awards won", "comments", "founded", "disbanded");
	buildTables("team", $team);

	 $score = array("id", "pointer season", "pointer game", "pointer team win", "pointer team lose", "pointer student win", "pointer student lose", "pointer stli win", "pointer stli lose", "pointer judge 1", "pointer judge 2", "pointer judge 3", "student win score", "student win comments", "student lose score", "student lose comments", "comments");
	buildTables("score", $score);

	 $competition = array("id", "type", "pointer season", "pointer venue", "pointer business", "pointer division", "pointer conference", "pointer state", "pointer region", "pointer entity 1",  "pointer entity 2", "pointer entity 3", "pointer entity 4", "pointer entity 5", "pointer entity 6", "pointer entity 7", "entity 1 points", "entity 1 placement", "entity 1 comments", "entity 2 points", "entity 2 placement", "entity 2 comments", "entity 3 points", "entity 3 placement", "entity 3 comments", "entity 4 points", "entity 4 placement", "entity 4 comments", "entity 5 points", "entity 5 placement", "entity 5 comments", "entity 6 points", "entity 6 placement", "entity 6 comments", "entity 7 points", "entity 7 placement", "entity 7 comments"); //32
	buildTables("competition", $competition);

	 $game = array("id", "pointer season", "pointer team 1", "pointer team 2", "pointer judge 1", "pointer judge 2", "pointer judge 3", "pointer stli 1", "pointer stli 2", "pointer competition", "attendance", "team 1 abr", "team 1 score", "team 2 abr", "team 2 score", "date", "game type");
	buildTables("game", $game);
	
	 $veryshortmarket = array("name", "e-mail");
	buildTables("veryshortmarket", $veryshortmarket);

	$qlog = array("error", "goodqry");
	buildTables("qlog__", $qlog);

	$pointer = array("name", "current");
	buildTables("pointer", $pointer);

	$d = new dbTasks;
	echo $d->connect();

//	echo $d->routineQuery("INSERT INTO `pointer` (`name`, `current`) VALUES 'market', '', 'person', '0', 'judge', '195', 'student', '20', 'nation', '3000000', 'region', '3000002' 'state', '3000006', 'conference', '300001', 'division', '300040', 'venue', '300300', 'season', '399990', 'stli', '40', 'team', '42', 'game', '45', 'competition', '50', 'score', '51', 'login', '60', 'payment', '72', 'transaction', '83', 'business', '95', 'ad', '97'");
echo $d->routineQuery("INSERT INTO `pointer` VALUES('market', ''), ('person', '0'), ('judge', '195'), ('student', '20'), ('nation', '3000000'), ('region', '3000002'), ('state', '3000006'), ('conference', '300001'), ('division', '300040'), ('venue', '300300'), ('season', '399990'), ('stli', '40'), ('team', '42'), ('game', '45'), ('competition', '50'), ('score', '51'), ('login', '60'), ('payment', '72'), ('transaction', '83'), ('business', '95'), ('ad', '97')");
//	echo $d->routineQuery("INSERT INTO pointer(`current`) VALUES '', '0', '195', '20', '3000000', '3000002', '3000006', '300001', '300040', '300300', '399990', '40', '42', '45', '50', '51', '60', '72', '83', '95', '97'");
}

function buildTables($dbName, $db) {
	$d = new dbTasks;
	echo $d->connect();
	//I have commented out lines that have been successfully debugged and executed to create a new table.  Uncomment when ready to create tables on fresh database.
	
/*	echo $d->createTable(true, "humans", "firstName VARCHAR(36)", "lastName VARCHAR(56)", "DOB VARCHAR(10)", "gender CHAR(1)", "streetAddress VARCHAR(116)", "city VARCHAR(36)", "state VARCHAR(16)", "zipCode VARCHAR(10)", "parentFirstName1 VARCHAR(36)", "parentLastName1 VARCHAR(56)", "parentFirstName2 VARCHAR(36)", "parentLastName2 VARCHAR(56)", "parentPrimaryPhone VARCHAR(16)", "parentSecondaryPhone VARCHAR(16)", "email VARCHAR(96)", "pianoExperience VARCHAR(720)", "otherExperience VARCHAR(720)", "studentSkills VARCHAR(72)", "schedule VARCHAR(720)"); */
	$defaultSize = 150;
	if ($dbName == "qlog__") $defaultSize = 1500; //need a much bigger size for error logging

	$firstPass = true;
	foreach ($db as $currentText) {
		if ($firstPass) {
			$finalQuery = "`".$currentText."` "."VARCHAR(".$defaultSize.")";
			$firstPass = false;
		}
		else $finalQuery .= ", `".$currentText."` "."VARCHAR(".$defaultSize.")";
	}
	echo $d->createTable(true, $dbName, $finalQuery);
}




//$dbs = new mysqli($dbHost, $dbUser, $dbPass/*, $dbName, $dbPort, $dbSocket*/) or die('Error code was ' .mysqli_connect_error());
//if (!$dbs = new mysqli($dbh, $dbu, $dbp)) die(mysql_error());
//$dbs = new mysqli($dbHost, $dbUser, $dbPass);


?>
<!-- <meta name='keywords' content='piano, piano lessons, lessons, Douglas, Michael, Singer, Douglas Michael Singer, Douglas Singer, Hastings, NE, Nebraska, innovative, all, all ages, ages, children, kids, christian, values, homeschool, group, group piano' />
<meta name="robots" content="index, follow"/>
<meta name="web_author" content="Douglas Michael Singer, LLC"/>
<meta name="rating" content="safe for kids"/>
<meta name="copyright" content="2012, Douglas Michael Singer, LLC"/>
<meta name="revisit-after" content="9 days"/> 
<meta name="robots" content="noydir"/>
<meta name="language" content="English"/>
<meta name="slurp" content="noydir"/>
<meta name="distribution" content="global"/>
<meta name="googlebot" content="noodp"/>
<meta name="googlebot" content="noarchive"/>
-->
