<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php_filter_class</title>
    <style>
        .green{
            color: green;
            font-size: 25px;
         }
        .red{
            
            color: red;
            font-size: 25px;
          }
    
    
    </style>
</head>
<body>
  <h2>php filter class</h2>
         
         
          <?php
       /*
           //number check korar jonno
           
        $var=$_GET['murad'];
        $int_options = array(
        "options"=>array
        (
        "min_range"=>0,
        "max_range"=>256
        )
        );
        if(!filter_var($var, FILTER_VALIDATE_INT, $int_options))
        {
        echo'<p class="red">integer is not valid</p>';
        }
        else
        {
        echo'<p class="green">integer is  valid</p>';
        }
        
    
             //email check korar jonno php cpde
            $mail=$_GET['email'];

            if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
            {
              echo'<p class="red">Email is not valid</p>';
            }
            else{
                echo'<p class="green">Email is valid</p>';
             }

              */
             //onk gula input chack korar jonno
              
          $filters=array(
              "name"=>array("filter"=>FILTER_SANITIZE_STRING),
              "age"=>array("filter"=>FILTER_VALIDATE_INT),
              "email"=>array("filter"=>FILTER_VALIDATE_EMAIL),
              "options"=>array("min_range"=>0,"max_range"=>200));
    
           $results=filter_input_array(INPUT_GET,$filters);

                if(!$results['age'])
                 {
                    echo"age must be 1 to 200.<br/>";
                  }
                 elseif(!$results['email'])
                 {
                     echo"email is not valid <br/>";
                 }
               else{
                    echo 'input is valid';
                }
    
           
          
      
    
    
    

    
         ?>
                <form action="#" method="get">
                    <input type="text" name="name" placeholder="name"> <br>
                    <input type="text" name="age" placeholder="age"> <br>
                    <input type="text" name="email" placeholder="email"> <br>
                    <input type="submit" value="submit">
                </form>

   
   
   
   </body>
</html>