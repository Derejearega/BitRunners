<?php

$results = "../engine/results";
if(file_exists($results))
{
	$data = file_get_contents($results);
	echo $data;
	unlink($results);
}
else
{
	echo "Nope";
}
?>
