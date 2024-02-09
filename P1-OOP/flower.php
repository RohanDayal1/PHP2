<?php
class flower{
    private $color;
    private $name;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;


    }
    
}

$flower1 = new flower ("zonnebloem", "wit");
$flower2 = new flower ("roos", "rood");

var_dump($flower1);
echo("</br>");

var_dump($flower2);
echo("</br>");

$flower1-> color = "yellow";
