<?php
echo "<html>";
echo "<body>";

if (isset($_GET['continue'])) {
       if ($_GET['continue'] == "M35h2bDjH28N")
	{
		include("db-1.inc");
		$d = new dbTasks;
		echo $d->connect();
		echo $d->slay();
       }
}
else
{
echo "Are you sure you want to slay (delete) the entire database?  You will not be able to recover it if you click \"CONTINUE\".<br/> I'm SURE!  <a href=\"JavaScript:void(0)\" onClick=\"killIt();\" >CONTINUE</a>";
echo "<script>";
echo "function killIt() {";
echo "window.location.assign(\"slay-db.php?continue=M35h2bDjH28N\");";
echo "}";
echo "</script>";
echo "</body>";
}


echo "</html>";
?>
