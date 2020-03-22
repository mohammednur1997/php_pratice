
<?php
/*

    //line by line poder jonno php code
    $file= fopen("welcome.text","r") or die('could not open the file');
    while(!feof($file))
    {
      echo fgets($file)."<br/>";  
    }
    fclose($file);
    ?>
    */
    
   
  
 



$file=fopen("text.txt","r") or die("could not open file");


while(!feof($file))
{
    echo fgets($file)."<br/>";
}
fclose($file);

?>





































