<?php
$xiaohong = $_GET["xiaohong"];
$file = $_GET["file"];

if(isset($xiaohong)&&(file_get_contents($xiaohong,'r')==="xiaohong is admin")){
    echo "hello xiaohong!<br>";
        include($file);//flagzaizheli.php
}else{
    echo "Xiaohong!You are not admin !";
}

?>

<!--
$xiaohong = $_GET["xiaohong"];
$file = $_GET["file"];

if(isset($xiaohong)&&(file_get_contents($xiaohong,'r')==="xiaohong is admin")){
    echo "hello xiaohong!<br>";
    include($file); //flagzaizheli.php
}else{
    echo "Xiaohong!You are not admin ! ";
}
 -->