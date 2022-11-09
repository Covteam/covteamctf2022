<?php
highlight_file(__FILE__);
//flag is in /
error_reporting(1);
class Exec {
    public $var;
    public function execute($value)
    {
        @eval($value);
    }
    public function __invoke(){
        $content = $this->execute($this->var);
    }
}

class Show
{
    public $source;
    public $str;
    public function __construct($file='index.php')
    {
        $this->source = $file;
        echo $this->source.'Welcome'."<br>";
    }
    public function __toString()
    {
        return $this->str->source;
    }

    public function _show()
    {
        if(preg_match('/gopher|http|ftp|https|dict|\.\.|flag|file/i',$this->source)) {
            die('hacker');
        } else {
            highlight_file($this->source); 
        }

    }

    public function __wakeup()
    {
        if(preg_match("/gopher|http|file|ftp|https|dict|\.\./i", $this->source)) {
            echo "hacker";
            $this->source = "index.php";
        }
    }
}

class Test
{
    public $p;
    public function __construct()
    {
        $this->p = array();
    }

    public function __get($key)
    {
        $function = $this->p;
        return $function();
    }
}

if(isset($_GET['hello']))
{
    unserialize($_GET['hello']);
}
else
{
    $show = new Show('pop.php');
    $show->_show();
}

