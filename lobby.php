<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_COOKIE['user'])){
$t=$_POST["lol"];
$us=$_COOKIE["user"];
$ch = fopen("ajax_info.txt", "r+");
$vl=file_get_contents("ajax_info.txt");
$nl=$us . ": " . $t . "\r\n" . $vl;
file_put_contents("ajax_info.txt",$nl);
fclose($ch);
header("Location: lobby.html");
if($t=="edisons vai eduards" or $t=="eduards vai edisons"){
	setcookie("system","done",time()+10);
} else {
	setcookie("system","",time()+10);
}
} else {
	header("Location: index.html");
}
?>