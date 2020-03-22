 <?php
   /*
    //cherater by cherater poder jonno php code
    $file=fopen("murad.text","r") or die(could not open);
    while(!fopen($file))
    {
        echo fgetc($file);
    }
    fclose($file);

    ?>
    */

$file=fopen("welcome.text","r") or die('could not open file');
while(!feof($file))
{
    echo fgetc($file)."<br/>";
}
fclose($file);
?>