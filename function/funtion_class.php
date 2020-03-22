<!doctype html>
<html>
   <head>
       <title>My function class</title>
   </head>
   <body>
     
     
                                        <?php
                                            $cost = 100;
                                            $vat = 0.15;
                                            function calculatePrice(&$cost, $vat)
                                            {
                                            $cost = $cost + ($cost * $vat);
                                            $vat+= 4;
                                            }
                                            calculatePrice($cost, $vat);
                                            printf("Vat is %06.2f%% ", $vat*100);
                                            printf("Cost is: $%07.2f", $cost);
                                            ?>

   
   
   
 </body>
</html>