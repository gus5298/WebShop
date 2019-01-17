	<?php
	$vote = $_REQUEST['vote'];

	//get content of textfile
	$filename = "poll_result.txt";
	$content = file($filename);

	//put content in array
	$array = explode("||", $content[0]);
	$t = $array[0];
	$f = $array[1];

	if ($vote == 0) {
	  $t = $t + 1;
	}
	if ($vote == 1) {
	  $f = $f + 1;
	}

	//insert votes to txt file
	$insertvote = $t."||".$f;
	$fp = fopen($filename,"w");
	fputs($fp,$insertvote);
	fclose($fp);
	?>

	<h2>Result:</h2>
	<table>
	<tr>
	<td>Thursday:</td>
	<td>

	<?php echo(100*round($t/($f+$t),2)); ?>%
	</td>
	</tr>
	<tr>
	<td>Friday:</td>
	<td>

	<?php echo(100*round($f/($f+$t),2)); ?>%