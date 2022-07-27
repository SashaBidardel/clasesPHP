<?php 
   class Zona{
    private $principal=1000;
    private $compra_venta=200;
    private $zona_vip=25;
    function comprarPrincipal(){
       $principal= $this->principal;
       if ($principal>0){
         echo "Venta realizada";
         $this->principal-=1;
       }else{
        echo "No hay entradas disponibles";
       }
    }
    function comprarCompraVenta(){
        $compra_venta= $this->compra_venta;
        if ($compra_venta>0){
          echo "Venta realizada";
          $this->compra_venta-=1;
        }else{
         echo "No hay entradas disponibles";
        } 
    }
    function comprarZonaVip(){
        $zona_vip= $this->zona_vip;
        if ($zona_vip>0){
          echo "Venta realizada";
          $this->zona_vip-=1;
        }else{
         echo "No hay entradas disponibles";
        } 
    }
   }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta entradas</title>
</head>
<body>
    
</body>
</html>