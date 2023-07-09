<?php

class Fruit{
    public $name;
    public $color;

    function set_name($name,$color){
        $this->name = $name;
        $this->color =$color;
    }
    function get_name(){
        echo "Name: $this->name and Color: $this->color";
    }
}

$obj = new Fruit();
$obj->set_name('apple','red');
echo $obj->get_name();


?>