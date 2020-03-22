<?php
if (isset($_REQUEST['Email']))
{
    $to=$_REQUEST['Email'];
    $subject=$_REQUEST['Subject'];
    $Messas=$_REQUEST['Messas'];
    $form=$_REQUEST['Form'];
    mail($to,$subject,$Messas,$form);
    echo "mail send successfully";
}
else{
echo "masses failed to send";
}
?>