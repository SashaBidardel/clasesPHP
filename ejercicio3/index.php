<?php 
session_start();
if(!isset($_SESSION["numTiradas"])){
    $_SESSION["numTiradas"]=0;
};
class DadoPoker{
    public $tirada=array('A','K','Q','J','7','8');
    public $ultimaJugada="";
    public static $numTiradas=0;
    function __construct($numTiradas)
    {
       self::$numTiradas= $numTiradas;
    }
    public function tirar(){
      $pos=rand(0,5);
      $ultimaJugada=$this->tirada[$pos];
      $this->ultimaJugada=$ultimaJugada;
      self::$numTiradas = self::$numTiradas + 1;
     
    }
    public function nombreFigura(){
        $ultimaJugada=$this->ultimaJugada;
        return $ultimaJugada;
    }
    public function getTiradasTotales(){
       
        return self::$numTiradas;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercio 3 de clases </title>
    <style>
        .dado{display:inline-block; width: 150px; height:150px; border: 2px solid black; position: relative;}
        .dado .cara {font-size: 95px; 
            width: 69px; height:113px; position: absolute; top:50%; left:50%;
        margin-left:-34px; margin-top:-56px; display:none;}
        .dado .cara.activa{display:inline-block;}

        /* Ejemplo de animacion por eso lo separamos */
/*
        @keyframes tirada{
            from{
                color:red;
            }
            to{
                color: green;
            }
        }
        @keyframes tirada{
            0%{
                color:red;
            }
            100%{
                color: green;
            }
        }
*/
        @keyframes tirada{
            0%{
                opacity:0;
            }
          
            to{
                opacity:1;
            }
        }
        .cara{animation-duration:0.5s; animation-name: tirada; animation-iteration-count:infinity; animation-delay:0;animation-fill-mode: ;}

    </style>
    </head>
    <body>
    <?php 
            $dado=new DadoPoker( $_SESSION["numTiradas"]);
            $dado2=new DadoPoker( $_SESSION["numTiradas"]);
            $_SESSION["numTiradas"]+=1;

           
            if (isset($_POST["btn"])){
                $dado->tirar();
                $dado2->tirar();
                //instancié dos objetos,serían 5 para el póker y hacer las transiciones para cuando tire que parezca que da vueltas,es más rollo css,pero todo lo funcional ya está
                echo "La última tirada ha sido un:".$dado->nombreFigura()."<br>";
                echo "El número de tiradas ha sido:".$dado->getTiradasTotales()."<br>";
                echo "La última tirada ha sido un:".$dado2->nombreFigura()."<br>";
                echo "El número de tiradas ha sido:".$dado2->getTiradasTotales()."<br>";
            }
            
            ?>
        <div class="dado">
        
            <div class="cara <?php if ($dado->nombreFigura()=="A") echo 'activa' ?>" id="A">A</div>
            <div class="cara <?php if ($dado->nombreFigura()=="K") echo 'activa' ?>" id="K">K</div>
            <div class="cara <?php if ($dado->nombreFigura()=="Q") echo 'activa' ?>" id="Q">Q</div>
            <div class="cara <?php if ($dado->nombreFigura()=="J") echo 'activa' ?>" id="J">J</div>
            <div class="cara <?php if ($dado->nombreFigura()=="7") echo 'activa' ?>" id="siete">7</div>
            <div class="cara <?php if ($dado->nombreFigura()=="8") echo 'activa' ?>" id="ocho">8</div>
        </div>
        <div>
        <div class="dado">
        <div class="cara <?php if ($dado2->nombreFigura()=="A") echo 'activa' ?>" id="A">A</div>
            <div class="cara <?php if ($dado2->nombreFigura()=="A") echo 'activa' ?>" id="A">A</div>
            <div class="cara <?php if ($dado2->nombreFigura()=="K") echo 'activa' ?>" id="K">K</div>
            <div class="cara <?php if ($dado2->nombreFigura()=="Q") echo 'activa' ?>" id="Q">Q</div>
            <div class="cara <?php if ($dado2->nombreFigura()=="J") echo 'activa' ?>" id="J">J</div>
            <div class="cara <?php if ($dado2->nombreFigura()=="7") echo 'activa' ?>" id="siete">7</div>
            <div class="cara <?php if ($dado2->nombreFigura()=="8") echo 'activa' ?>" id="ocho">8</div>
        </div>
        <div>
            <form action="" method="post">
                <input type="submit" id="btn" name="btn" value="tirar">
            </form>
        </div>
    </body>
</html>