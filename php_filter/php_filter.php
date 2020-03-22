<?php
$ver=123;
if(!filter_ver($ver,FILTER_VALIDATE_INT))
{
    echo"intejer is not valid";
}
else{
    echo "integer is valid";
}
?>




<?php
$ver=300;
$option_ver=array("options"=>array("min_range"=>0,"max_range"=>250));

if (!filter_ver($ver,FILTER_VALIDATE_INT,$option_ver))
{
  echo "inter not valid";
}
else{
    echo "integer is valid";
}

?>




<?php
if (!filter_has_ver(INPUT_GET,"email"))
{
    echo"email dose not exist";
}
else{
    if(!filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL))
    {
        echo"mail is not valid";
    }
    else{
        echo"email is vaild";
    }
}
?>



<?php 
$int= 300;
$option_ver=array("options"=>array("min_range"=>0,"max_range"=>300));
if(!filter_ver($int,FILTER_VALIDATE_INT,$option_ver))
{
    echo"this is not validate figur";
}
else{
   echo"this is validate figur";
}
?>






<?php
if (!filter_has_ver(INPUT_GET,"email"]))
{
  echo"please enter a email";
    
}
else{
   if (!filter_input(INPUT_GET,"email"],FILTER_VALIDATE_EMAIL))
   {
       echo"email not valid";
}
    else{
        echo "email is valid";
    }
    
}
?>



<?php
$filters=array("name"=>array("filter"=>FILTER_SANITIZE_STRING),"age"=>array("filter"=>FILTER_VALIDATE_INT),"option"=>array("min_range"=>0,"max_range"=>300),"email"=>array("filter"=>FILTER_VALIDATE_EMAIL));


$result=filter_input_array(INPUT_GET,$filters);
if(!$result["age"])
{
echo"you must add number 1 to 100";
}
elseif(!$result["email"]){
    echo'email is not valid';
}
else{
  echo"user input is valid"
}
?>






















































