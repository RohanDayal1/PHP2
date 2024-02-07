<?php

class huizen {
    private $floor;
    private $rooms;
    private $width;
    private $height;
    private $depth;
    private $volume;
    private $price;

    public function __construct($floor, $rooms, $width, $height, $depth, $volume, $price) {
        $this->floor = $floor;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->volume = $volume;
        $this->price = $price;
    }

    public function displayInfo() {
        echo "Dit huis heeft {$this->floor} verdiepingen, {$this->rooms} kamers en een volume van {$this->volume}m3. De prijs van het huis is {$this->price}.\n";
    }
}


$house1 = new huizen(2, 4, 10, 5, 8, 100, 15000);
$house2 = new huizen(3, 6, 12, 6, 10, 180, 25000);
$house3 = new huizen(1, 3, 8, 4, 6, 70, 10000);

$house1->displayInfo();
echo("</br>");

$house2->displayInfo();
echo("</br>");

$house3->displayInfo();
echo("</br>");
?>
