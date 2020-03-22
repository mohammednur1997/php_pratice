<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <?php
        function acalculate($firsthum,$secondnum)
        {
            $total =$firsthum+$secondnum;
            echo "Ans:- $total <br/>";
        }
        $argument1=$_GET["number1"];
        $argument2=$_GET["number2"];

        acalculate($argument1,$argument2);

        ?>
   
   
   
   
   
   
    
</body>
</html>