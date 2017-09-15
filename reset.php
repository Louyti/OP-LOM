<?php
	$myfile = fopen("ajax_info.txt", "w+");
	file_put_contents("ajax_info.txt","Live chat starts here.\nAll previous messages have been deleted.\n");
	fclose($myfile);
	header("Location: lobby.html");
?>