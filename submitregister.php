<?php
	require_once("lib-0.php");
	load_it_all_up_redirect("Thank you for joining SingTeam America!");
	$candidate = new human();
	//update_hits("auditionreq");

	$success = true;
	if (!$candidate->initiate_mysql("")) $success = false;
	
	if ($success) {
	//first, assign shared variables
	for ($i = 0; $i <=3; $i++) {
		$_POST['persontexti'][$i] = $_POST['shtexti'][$i];
		$_POST['markettexti'][$i] = $_POST['shtexti'][$i]; }
	
	$_POST['persongenderi'] = $_POST['shgenderi'][0];
	$_POST['marketgenderi'] = $_POST['shgenderi'][0];

	for ($i = 0; $i <=2; $i++) {
		$_POST['persondobi'][$i] = $_POST['shdobi'][$i];
		$_POST['marketdobi'][$i] = $_POST['shdobi'][$i]; }

	//second, create a new person and populate with data
		$_POST['persontexti'][4] = $candidate->retrievecurrentpointer("person");
		$_POST['markettexti'][4] = $_POST['persontexti'][4];
		if (!$candidate->addtodb_($_POST, "person", true)) $success = false;
		if ($success) $candidate->augmentandstorecurrentpointer("person");
		
	//third, add data to market database
		if (!$candidate->addtodb_($_POST, "market", true)) $success = false;
	
	//fourth, create a new student and populate with correct pointers
		$_POST['studenttexti'][0] = $candidate->retrievecurrentpointer("student");
		$_POST['studenttexti'][1] = $_POST['persontexti'][4];
		if (isset($_POST['county']) and ($_POST['county'] != "")) $t_dpointer = 3000399999 + $_POST['county']; else $t_dpointer = -1;
		if (isset($_POST['studenttexti'][2])) $_POST['studenttexti'][2] = $t_dpointer;
		if (!$candidate->addtodb_($_POST, "student", true)) $success = false;
		if ($success) $candidate->augmentandstorecurrentpointer("student");

	}
	if ($success) {
		$candidate->update_hits("submitregister", "direct");
		header( 'Location: completedreg.php?name='.$_POST['shtexti'][0].' '.$_POST['persontexti'][6].' '.$_POST['shtexti'][1].'&id='.$_POST['studenttexti'][0].'&division='.$_POST['county']);
		
	}
	else {
		$candidate->update_hits("ERROR_submitregister", "direct");
		header( 'Location: index.php?displaybanner=error&code=0000'); 
	}
?>