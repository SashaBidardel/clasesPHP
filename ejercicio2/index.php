<?php
/*
    Ejercicio 2
    Crea la clase Vehiculo, así como las clases Bicicleta y Coche como subclases de la primera. Para 
    la clase Vehiculo, crea los métodos de clase getVehiculosCreados() y getKmTotales(); así como 
    el método de instancia getKmRecorridos(). Crea también algún método específico para cada una 
    de las subclases. Prueba las clases creadas mediante una aplicación que realice, al menos, las 
    siguientes acciones:
        • Anda con la bicicleta
        • Haz el caballito con la bicicleta
        • Anda con el coche
        • Quema rueda con el coche
        • Ver kilometraje de la bicicleta
        • Ver kilometraje del coche
        • Ver kilometraje total
*/
class Vehiculo
{
    public static function getVehiculosCreados()
    {
        echo "get Vehiculos";
    } 
    public static function getKmTotales()
    {
        echo "get km";
    }
    function getKmRecorridos()
    {
        echo "get Km Recorridos";
    }
    function andar()
    {
        echo "andar";
    }
    
}

class Bicicleta extends Vehiculo
{
    function caballito()
    {
        echo "Caballlito en bici";
    }

}

class Coche extends Vehiculo
{
    function quemarRueda()
    {
        echo "Quemar rueda";
    }
}

$bici = new Bicicleta();
$coche = new Coche();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercio 2 de clases </title>
    </head>
    <body>
        <p>
            Anda con la bicicleta <?=$bici->andar();?>
        </p>
        <p>
            Haz el caballito con la bicicleta <?=$bici->caballito();?>
        </p>
        <p>
            Anda con el coche <?=$coche->andar();?>
        </p>
        <p>
            Quema rueda con el coche <?=$coche->quemarRueda();?>
        </p>
        <p>
            Ver kilometraje de la bicicleta <?=$bici->getKmRecorridos();?>
        </p>
        <p>
            Ver kilometraje del coche <?=$coche->getKmRecorridos();?>
        </p>
        <p>
            Ver kilometraje total <?=($coche::getKmTotales() + $bici::getKmTotales());?>
        </p>
    </body>
</html>