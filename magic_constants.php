<?php
class Post{
    private $name;

    function __set($name, $value){
        echo 'Setting '.$name.' to <strong>'.$value.'</strong> <br />';
        $this->name = $value;
    }
    function __get($name){
        echo 'Getting'.$name.'<strong>'.$this->name.'</strong> <br />';
    }
    function __isset($name){
        echo 'Is'.$name.' set?<br />';
        return isset($this->name);
    }
}
$post = new Post;
$post->name = 'Testing';
echo $post->name;
var_dump(isset($post->name));