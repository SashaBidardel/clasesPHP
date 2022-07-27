<?php
class Animal{
   function mover(){
    echo "mover";
   }
   function comunicar(){
     echo "comunicar";
   }
   function alimentar(){
    echo "comer";
   }
}
class Mamifero extends Animal{
  function amamantar(){
    echo "lactancia descendientes";
  }
  function vientre(){
    echo "vivíparos";
  }
  function mandibula(){
    echo "mandíbula";
  }
}
class Ave extends Animal{
  function oviparos(){
    echo "oviparos";
  }
  function alas(){
    echo "alas";
  }
  function plumas(){
    echo "plumas";
  }
 
}
class Gato extends Mamifero{
    function maullar(){
      echo "miau";
    }
    function arañar(){
      echo "arañar";
    }
    function saltar(){
      echo "saltar";
    }
}
class Perro extends Mamifero{
  public $ladrido;
  function ladrar(){
    echo "guau";
  }
  function morder(){
    echo "morder";
  }
  function lamer(){
    echo "lamer";
  }
}
class Canario extends Ave{
  public $canto;
  function piar(){
    echo "pio,pio";
  }
  function volar(){
    echo "volar";
  }
  function picar(){
    echo "picar";
  }
}
class Pinguino extends Ave{
  public $canto;
  function caminar(){
    echo "levantando las patas";
  }
  function planear(){
    echo "planear";
  }
  function nadar(){
    echo "nadar";
  }
}
class Lagarto extends Animal{
  function escamas(){
    echo "escamas";
  }
  function patas(){
    echo "patas";
  }
  function tomarSol(){
    echo "tomar el sol";
  }
}
$perro=new Perro;
$animal = new Animal();
$mamifero = new Mamifero(); 
$ave = new Ave();
$gato = new Gato(); 
$perro = new Perro(); 
$canario = new Canario(); 
$pinguino = new Pinguino();
$lagarto = new Lagarto();

$canario->canto="https://cdn.videvo.net/videvo_files/audio/premium/audio0044/watermarked/BirdsAmbEarlyMorni%20APS10152_preview.mp3";

$perro->ladrido = "https://cdn.videvo.net/videvo_files/audio/premium/audio0076/watermarked/DogBarkHowlsExteri%20PE917210_preview.mp3";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animales</title>
</head>
<body>
    <div><?= $perro->ladrar()?></div>
    <audio controls="true">
          <source src="<?= $perro->ladrido?>"></source>
    </audio>
    <audio controls="true">
          <source src="<?= $canario->canto?>"></source>
    </audio>
</body>
</html>