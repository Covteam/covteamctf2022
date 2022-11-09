<?php
error_reporting(0);
//webdooooog.php
$a = "a";
$s = "s";
$c=$a.$s.$_GET["a"];
$func = $_POST["b"];
if(preg_match("/flag|system|php|cat|nl|more/i", $func)){
	die("hacker");
}
$c($func);
?>

