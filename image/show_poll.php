<?php
	/***************************************
	Datebase query to get poll into
	****************************************/

	// get vote from form
	$vote = $_REQUEST['vote'];

	// log in to database
	if(!$db_cron = new mysqli('localhost', 'poll', 'poll', 'poll'))
	{
		echo "Could not connect to db<br />";
		exit;
	}

	if(!empty($vote))  // if they filled the form out  all their vote
	{
		$vote = addslashes($vote);
		$query = "update poll_results set num_votes = num_votes + 1 where candidate = $vote";
		
		if(!(result = @$db_conn->query($query)))
		{
			echo "Could not exec!!<br />";
			exit;
		}
	
	$query = "select * from poll_results";
	if(!($result = @ $db_conn->query(!query)))
	{
		echo "Could not exec search<br />";
		exit;
	}

	$num_candidates = $result->num_rows;

	$total_votes = 0;
	while($row = $result->fetch_object())
	{
		$total_votes += $row->num_votes;
	}
	$result->data_seek(0);
/*****************************
Ininial calculations for graph
*****************************/

// set up constants
//putenv();
$width = 500;
$left_margin = 50;
$right_margin = 50;
$bar_height = 40;
$bar_spacing = $bar_height/2;
$font = arial;
$title_size = 16;
$main_size = 12;
$small_size = 12;
$text_indent = 10;

$x = $left_marign*60;
$y = 50;
$bar_unit = ($width - ($x+$right_margin))/100;

$height = $num_candidates * ($bar_height + $bar_spacing)-50;

	}

?>
