                                
								
								<?php
                                   function aacalculate($number1,$number2)
                                   {
                                      $total = $number1+$number2;
                                       echo "total amount.$total <br/>";
                                    }

                                     aacalculate(5,40);
                                     aacalculate(4,70);
                                     aacalculate(6,60);
                                     aacalculate(5,50);
                                   ?> 
                                   
                                  
 <?php
    function webcochbd()
    {
        
        $qulaty[]="My Name is RT Murad";
        $qulaty[]="My Father name is Abul khair";
        $qulaty[]="My Mother name is khalida akter";
        $qulaty[]="I am a students";
        return $qulaty;
    }
   list($info1,$info2,$info3,$info4)= webcochbd();
  echo "our family details:$info1,$info2,$info3,$info4"
?>