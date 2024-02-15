<?php

class Figuur {
    protected $kleur;
    protected $border;

    public function __construct($kleur, $border) {
        $this->kleur = $kleur;
        $this->border = $border;
    }

    public function teken() {
    }
}

class Vierkant extends Figuur {
    private $zijde;

    public function __construct($kleur, $border, $zijde) {
        parent::__construct($kleur, $border);
        $this->zijde = $zijde;
    }

    public function teken() {
        // SVG-code voor het tekenen van een vierkant
        $svg_code = "<rect width='{$this->zijde}' height='{$this->zijde}' fill='{$this->kleur}' stroke='{$this->border}' />";
        return $svg_code;
    }
}

class Driehoek extends Figuur {
    private $zijde1;
    private $zijde2;
    private $zijde3;

    public function __construct($kleur, $border, $zijde1, $zijde2, $zijde3) {
        parent::__construct($kleur, $border);
        $this->zijde1 = $zijde1;
        $this->zijde2 = $zijde2;
        $this->zijde3 = $zijde3;
    }

    public function teken() {
        // SVG-code voor het tekenen van een driehoek met omgedraaide punten
        $svg_code = "<polygon points='0,{$this->zijde3} {$this->zijde1},{$this->zijde3} {$this->zijde1},0' fill='{$this->kleur}' stroke='{$this->border}' />";
        return $svg_code;
    }
    
}

class Rechthoek extends Figuur {
    private $breedte;
    private $hoogte;

    public function __construct($kleur, $border, $breedte, $hoogte) {
        parent::__construct($kleur, $border);
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
    }

    public function teken() {
    
        $svg_code = "<rect width='{$this->breedte}' height='{$this->hoogte}' fill='{$this->kleur}' stroke='{$this->border}' />";
        return $svg_code;
    }
}

class Cirkel extends Figuur {
    private $straal;

    public function __construct($kleur, $border, $straal) {
        parent::__construct($kleur, $border);
        $this->straal = $straal;
    }

    public function teken() {
        
        $svg_code = "<circle cx='{$this->straal}' cy='{$this->straal}' r='{$this->straal}' fill='{$this->kleur}' stroke='{$this->border}' />";
        return $svg_code;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drie op een rij</title>
</head>
<body>

    <svg width="100" height="100">
        <?php
       
        $vierkant = new Vierkant("lightblue", "black", 100);
        echo $vierkant->teken();
     
     ?>
    </svg>
    <svg width="100" height="100">
        <?php
       
       $vierkant = new Vierkant("purple", "black", 100);
       echo $vierkant->teken();
        
        
        ?>
    </svg>
    <svg width="100" height="100">
        <?php
       
       $vierkant = new Vierkant("green", "black", 100);
       echo $vierkant->teken();
        echo"<br>";
        
        ?>
    </svg>
        

    <svg width="100" height="100">
        <?php

      $cirkel = new Cirkel("lightblue", "black", 50);
      echo $cirkel->teken();
        ?>

    </svg>

    <svg width="100" height="100">
        <?php

      $cirkel = new Cirkel("purple", "black", 50);
      echo $cirkel->teken();
        ?>

    </svg>

    <svg width="100" height="100">
        <?php

      $cirkel = new Cirkel("green", "black", 50);
      echo $cirkel->teken();
      echo"<br>";
        ?>

    </svg>


    <svg width="150" height="100">
        <?php
            $rechthoek = new Rechthoek("lightblue", "black", 200, 100);
            echo $rechthoek->teken();
                
                ?>
    </svg>
        
    <svg width="150" height="100">
        <?php
            $rechthoek = new Rechthoek("purple", "black", 200, 100);
            echo $rechthoek->teken();
                
                ?>
    </svg>
        
    <svg width="150" height="100">
        <?php
            $rechthoek = new Rechthoek("green", "black", 200, 100);
            echo $rechthoek->teken();
            echo"<br>";
                ?>
    </svg>
        
    <svg width="150" height="100">
        <?php
             
     $driehoek = new Driehoek("lightblue", "black", 150, 150, 150);
     echo $driehoek->teken();
                
                ?>
    </svg> 

    <svg width="150" height="100">
        <?php
             
     $driehoek = new Driehoek("purple", "black", 150, 150, 150);
     echo $driehoek->teken();
                
                ?>
    </svg> 
    

    <svg width="150" height="100">
        <?php
             
     $driehoek = new Driehoek("green", "black", 150, 150, 150);
     echo $driehoek->teken();
                
                ?>
    </svg> 
</body>
</html>
