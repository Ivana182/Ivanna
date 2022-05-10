<!Ejemplo de redondeo>
<html>

<head>
 <title> cálculos </title>
 </head>

 <body>
 <h1> cálculos, redondeo y formato. </h1>
 <?PHP 
        /*primero declaramos las variables */
                   $precioneto=101.98;
                           $iva=0.196;
                                   $resultado =$precioneto *$iva;
                                           echo "El precio es de";
                                                   echo $precioneto;
                                                           echo "y el IVA el";
                                                                   echo $iva;
                                                                           echo "% <br>";
                                                                                   echo "Resultado:";
                                                                                           echo rotundo ($resultado,2);
                                                                                                   echo "con ROUNDI()<br>";
                                                                                                           echo $resultado;
                                                                                                                   echo "normal \n";
                                                                                                                           echo "<br><br>";
                                                                                                                                   $resultado2 = sprintf ("%01.2f", $resultado);
                                                                                                                                           echo "usando la función SPRINTF se ve asi:";
                                                                                                                                                   echo $resultado2
                                                                                                                                                   ?>

                                                                                                                                                   </body>

                                                                                                                                                   </html>