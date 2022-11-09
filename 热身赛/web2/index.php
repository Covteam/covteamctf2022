<?php
if(!isset($_COOKIE['user'])){
	session_start();
	setcookie('user','guest');
}
if(!isset($_GET['name'])){
	echo '<h1>Please `GET` me your `name`,I will tell you more thing</h1>';
}else{
	if($_POST['key']!='ctfisfun'){
		echo "<h1>Hello {$_GET['name']}.Please `POST` me the `key`,but where is the key?</h1>";
		echo '<!--key:ctfisgood -->';
	}else{
		if($_COOKIE['user']!='admin'){
			echo '<h1>You are smart,but you are not admin</h1>';	
		}else{
			echo '<h1>OK,this is you want :flag{515a4404-b0a9-4451-13a4-dbfa68adcd2a}</h1>';
		}
	}
}
?>