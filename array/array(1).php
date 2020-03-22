


     <?php
    
       $city = array("Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal");
   

       $town = array("dhaka","Chittagong","Chittagong","Chittagong","Chittagong","Chittagong");

       ?>
        
        
        
     <?php

          $university =array("Dhaka_university","rajshahi_university","National_university","jogiornath_university","jahangirnogor_university","public_university");


           echo "$university[5]" ;

           echo "$town[5]";
 
            echo "$city[3]";

          ?>
        
        
        
        
        
     <?php
           
           $city=array(2=>"Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal", "Barishal");
     
              ?>

        
        
        <?php
        
           $ages = array("adnan"=>32, "rezwan"=>30, "refat"=>34);

         echo "$city[3]";
       
          ?>
          
              

         <?php

         $continents=array("Asia"=>array("Bangladesh","India","Pakistan"),"Europe"=>array("England","France"),"Africa"=>array("Kenya","Libya","Somalia"));


        $country =array("asia"=>array("bangladesh","china","pakisthan") ,"europe"=>array("england","france") ,"Africa"=>array("kenya","libya"));



        ?>
        
        
        
        <?php
            
         $city=array("Dhaka", "Chittagong", "Rajshahi","Sylet","Khulna", "Barishal", "feni");
       
           foreach ($city as $value)
            
          {
          
            echo "$value.<br>";
          
           }




           $town = array("Dhaka","feni","dagonbhuyan","comilla","Nohyakhali");


               foreach($town as $murad)

               {

                   echo "$murad. <br/>";
               }
  
              ?>
              
              
              
             <?php
                 
                $numeric1 = range(10,15);
                  
                  //This is similar to
                  
                 $numeric1 = array(10,11,12,13,14,15);
                 
                
                 //array with optional parameter (even array)
                 
                 $numeric2 = range(10,20,2);
                  
                //This is similar to
                
               $numeric2 = array(10,12,14,16,18,20);
                //array odd
                
                 $numeric3 = range(11,21,2);
                 
                 //This is similar to
                 
                $numeric3 = array(11,13,15,17,19,21);
                    
                   
                 $letter = range("C","K");
              
                //This is similar to
                 
                   $letter = array("C","D","E","F","G","H","I","J","K");
                 
                       ?>
                       
                       
                       
             <?php

               $numbaric1 = range(10,15);

                $numbaric1= array(10,11,12,13,14,15);

 
                 
               $numbaric2 = range(10,20,2);


                $numbaric2 = array(10,12,14,16,18,20);



                   $numbaric3 = range(11,21,2);


                     $numbaric3= array(11,13,15,17,19,21);  

                    $letter = range("c","k");


                  $letter = array("c","d","e","f","g","h","i","j","k");
              ?>
              
              
              <?php

                    //letter array
                    $letter = range("C","K");

                    if(is_array($letter)){
                    echo "this is an array and its 3rd value is $letter[2]";
                    }else{
                    echo "this is not an array";
                    }

                    ?>
                    
         <?php
         
         $numbaric =range(10,15);
         
        if(is_array($numbaric))
        {
            echo "this is an array and its 4rd value is $numbaric[3] ";
        }
        else{
            echo "this number is not array";
        }


       print_r($numbaric);


     $town =array("bangladesh","india","pakistan","china","indonosiya","libya","somaliya");
    
      array_push($town,"butan","srilanka");



       echo "$town[7]";





      ?>           
                    
                    
        <?php


        $town = array("asia"=>array("bangladesh","pakistan","india") ,"europe"=>array("england","poland") ,"africa"=>array("kenya","libya","somaliya"));



           $town =array("bangladesh","india","pakistan","china","indonosiya","libya","somaliya");


           foreach($town as $azom)
           {
               echo "$azom";
           }

          ?>
          
          
          <?php

            $newCity = "Chittagong";
            $city = array("Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal");

            if(in_array($newCity,$city))

            echo "In Bangladesh most of the islamic scholars lives in $newCity";
 
             ?>
             
             <?php 
             
             $newcity ="Dhaka";
             $town =array("bangladesh","Dhaka","pakistan","china","indonosiya","libya","somaliya");


              if(in_array($newcity,$town))
              {
                  echo "In Bangladesh most of the islamic scholars lives in $newcity ";
              }


  ?>








 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        



