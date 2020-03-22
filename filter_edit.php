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
