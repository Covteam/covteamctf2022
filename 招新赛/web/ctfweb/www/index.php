<!DOCTYPE html>
<html>
<title>F12+white</title>
<body style="background-color:black;text-align:center;user-select:none">
<h1>We need a argument,can you tell me?</h1>
<p>How can we give we want to argument?</p>
<p>Can you stop the arguments to change?</p>
<p>Do you know URL?</p>
<!--preg_replace('/^(.*)wonderful(.*)$/','nonono',$aa)-->
<!--preg_match('/we_are_wonderful#/',$aa)
-->
<?php
$aa=$_GET['aa'];
$aa=preg_replace('/^(.*)wonderful(.*)$/','nonono',$aa);
echo "aa=";
echo $aa;
if($aa){
if(!preg_match('/wonderful/',$aa)){
echo "<script>alert('We dont have \"wonderful\",just try again!')</script>";
}
if(preg_match('/we_are_wonderful#/',$aa)){
echo "you are smart!";
echo $_ENV['FLAG'];
}
}
?>
</body>
</html>
