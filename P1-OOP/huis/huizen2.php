<?php
//auteur:RohanD
class House {
    public $rooms = [];

    public function add_room($room) {
        $this->rooms[] = $room;
    }

    public function calculate_total_volume() {
        $total_volume = 0;
        foreach ($this->rooms as $room) {
            $total_volume += $room->volume;
        }
        return $total_volume;
    }

    public function calculate_price($price_per_cubic_meter) {
        $total_volume = $this->calculate_total_volume();
        return $total_volume * $price_per_cubic_meter;
    }
};

class Room {
    public $length;
    public $width;
    public $height;
    public $volume;

     function __construct($length, $width, $height) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->volume = $this->calculate_volume();
    }

    public function calculate_volume() {
        return $this->length * $this->width * $this->height;
    }
}

$house = new House();
$room1 = new Room(5.2, 5.1, 5.5);
$room2 = new Room(4.8, 4.6, 4.9);
$room3 = new Room(5.9, 2.5, 3.1);


$house->add_room($room1);
$house->add_room($room2);
$house->add_room($room3);

$price_per_cubic_meter = 3000;
$total_volume = $house->calculate_total_volume();
$total_price = $house->calculate_price($price_per_cubic_meter);

//output
echo "Inhoud kamers:";
echo "<br>";
foreach ($house->rooms as $room) {
    echo "   lengte: $room->length m breedte: $room->width m hoogte: $room->height m\n";
    echo "<br>";
}
echo "<br>";

echo "Volume totaal = $total_volume m3";
echo "<br>";

echo "Prijs van het huis is = $total_price Euro";
echo "<br>";
