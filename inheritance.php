<?php
class First{
    protected $id = 23,
            $name = 'John Doe';
    
    public function saySomething($word){
        echo 'Something'. $word;
    }            
}

class Second extends First{
    public function getName(){
        echo $this->name;
    }
}

$second = new Second;
$second->getName();
//echo $second->saySomething('Hovno');





