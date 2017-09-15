<?php


$file1=file("user.txt");
$file2=$file1;
$pass=file("pass.txt");
$ch=file("ch.txt");
$g=0;
$x=0;
while($x<sizeof($file1)){
	//echo $x . "\n";
	$file1[$x]=rtrim($file1[$x],"\r\n");
	$pass[$x]=rtrim($pass[$x],"\r\n");
	//echo $file1[$x] . $pass[$x];
	if($_POST["firstname"]==$file1[$x] and $_POST["password"]==$pass[$x]){
		//echo "ir";
		setcookie('user',$_POST["firstname"],time()+(60 * 60*24*365*10),"/");
		setcookie('text',"",time()+(10 * 365 * 24 * 60 * 60),"/");
		//echo $_COOKIE["user"];
		$g=$x;
		if($ch[$x]==1){
			header('Location: test.html');
			exit();
		}
		if($ch[$x]==2){
			header("Location: lobby.html");
			exit();
		}
		$x=sizeof($file1);
	}	
	$x++;
}
if($g==0){
	header('Location: index.html');
}
//print_r($file2);
?>