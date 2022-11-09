<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>easyphp</title>
</head>
<body>
<p>
$lihua = $_POST['xiaoming'];
if (isset($_POST['xiaoming'])) {
    if ($lihua == md5($lihua))
        echo '你想要的';
} else
   echo "欢迎".$_POST["name"]."参加";
</p>
</body>
</html>
