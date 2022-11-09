<?php
class Name{
    private $username = '0';
    private $password = '1';

    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }

    function __wakeup(){
        $this->username = 'admin';
    }

    function __destruct(){
        if ($this->password != 45) {
            die();
        }
        if ($this->username === 'zhangsan') {
            echo '成功！！！';
            echo $_ENV['FLAG'];
        }else{
            die();
        }
    }
}
?>
