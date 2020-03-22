<!doctype html>
<html>
<head>
<title>php class</title>
</head>
<body>
   
      





		<?php
			   $cars = array
			  (
			  array("Volvo",22,18),
			  array("BMW",15,13),
			  array("Saab",5,2),
			  array("Land Rover",17,15)
			  );
			  
	          for ($row = 0; $row < 4; $row++) {
			  echo "<p><b>Row number $row</b></p>";
			  echo "<ul>";
			  for ($col = 0; $col < 3; $col++) {
				echo "<li>".$cars[$row][$col]."</li>";
			  }
			  echo "</ul>";
			}
			$dataErr='';
			if(!isset($_POST['data'])){
				echo'input your data';
				
			}else{
				$data=$_POST['data'];
				if(empty($_POST['data'])){
                  $dataErr='data is requied';
				}else{
					if(!filter_var($data,FILTER_VALIDATE_EMAIL)===false){
						echo'your input is valid';
					}else{
						echo'your Email is not vaild';
					}
				}
			}
			?>
			<form action='update.php' method='post'>
			<input type='text' name='data'>
			<span><p><?php $dataErr ;?></p></span>
			<input type='submit'value='submit'>
			</form>
			
		
		
	





</body>
</html>