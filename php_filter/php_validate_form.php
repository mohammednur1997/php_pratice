<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form_validate</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .error{
            color: red;
            
        }
        .data_menu{
                 background-image: url(image/8144_cool_sunrise.jpg);
                padding: 30px 0;
                max-width: 1350px;
                max-height: 760px;

            }
            .data{
                background-color: rgb(0,0,0,.5);
                padding: 3px 40px;
                border-radius: 9px 8px;
                color: white;
                 
            }
        .form-group {
              margin-bottom: 15px;
           }
        .lagim{
            font-size: 25px;
            color: red;
            margin-left: 2px;
         }
		 .green{
			 color:green;
		 }
		 
    
    </style>
</head>
<body>


<?php
    
    
     // define variables and set to empty values
    $name = $email =$website = $gender = $comment ="";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name= test_input($_POST['name']);
        $email= test_input($_POST['email']);
        $website= test_input($_POST['website']);
        $comment= test_input($_POST['comment']);
    }
    
    
    function test_input($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
    
       }
    
    
     //error input check korar jonno
    $namErr=$emailErr=$websitErr=$gendErr=$commentErr="";
    $name=$email=$website=$gender=$comment="";
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
     if(empty($_POST['name']))
     {
        $namErr="Need to write name"; 
     }
        else{
            $name=test_input($_POST['name']);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name))
            {
              $nameErr = "Only letters and white space allowed";
            }
        }
    
    
   
     if(empty($_POST['email']))
     {
        $emailErr="Need to write email"; 
     }
        else{
            $email=test_input($_POST['email']);
            // check if e-mail address is well-formed
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
           {
          $emailErr = "Invalid email format"; 
          }
    }
	
    
    
     if(empty($_POST['website']))
     {
        $websitErr="Need to write website"; 
     }
        else{
            $website=test_input($_POST['website']);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websitErr = "Invalid URL";
    }
        }
    
    
    
     if(empty($_POST['gender']))
     {
        $gendErr="Need to Select gender"; 
     }
        else{
            $gender=test_input($_POST['gender']);
        }
   
    
    
     if(empty($_POST['comment']))
     {
        $commentErr="Need to write comment"; 
     }
        else{
            $comment=test_input($_POST['comment']);
        }
    
    }
	
	//file upload korar jonno php code
	 // Check if the form was submitted

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Check if file was uploaded without errors

        if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){

            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");

            $filename = $_FILES["photo"]["name"];

            $filetype = $_FILES["photo"]["type"];

            $filesize = $_FILES["photo"]["size"];

        

            // Verify file extension

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        

            // Verify file size - 5MB maximum

            $maxsize = 5 * 1024 * 1024;

            if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        

            // Verify MYME type of the file

            if(in_array($filetype, $allowed)){

                // Check whether file exists before uploading it

                if(file_exists("upload/" . $_FILES["photo"]["name"])){

                    echo $_FILES["photo"]["name"] . " is already exists.";

                } else{

                    move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);

                    echo '<p class="green">Your file was uploaded successfully.</p>';

                } 

            } else{

                echo "Error: There was a problem uploading your file. Please try again."; 

            }

        } else{

            echo "Error: " . $_FILES["photo"]["error"];

        }

    }

	
	
	?>
   
    
      <section class="data_menu">
           <div class="container">
              <div class="raw">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                      <div class="data">
                          
                      <p>Please fill in this form and send us.</p>

                   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                      
                       <div class="form-group">
                        <label for="inputName">Name:<sub class="lagim">*</sub></label>
                          <input type="text" name="name" id="inputName" class="form-control" placeholder="Enter your Name">
                           <span class="error"><?php echo $namErr;?> </span>
                       </div>
                    
                    
                    <div class="form-group">
                    <label for="inputEmail">Email:<sub class="lagim">*</sub></label>
                    <input type="email" name="email" id="inputName" class="form-control" placeholder="Enter your Email">
                    <span class="error"><?php echo $emailErr;?> </span>
                   </div> 
                    
                    
                    <div class="form-group">
                     <label for="inputWebsite">Website:<sub class="lagim">*</sub></label>
                     <input type="text" name="website" id="inputName" class="form-control" placeholder="Enter your website">
                       <span class="error"><?php echo $websitErr;?> </span>
                    </div> 
                    
                    
                    <div class="form-group">
                    <label for="inputGender">Gender:<sub class="lagim">*</sub></label>
                         <input type="radio" name="gender" 	value="female">Female
                         <input type="radio" name="gender" 	value="Male">Male
                         <span class="error"><?php echo $gendErr;?> </span>
                     </div>  
                     
                     <div class="form-group">
                    <label for="inputComment">Comment:<sub class="lagim">*</sub></label>
                    <textarea name="comment" id="inputName" class="form-control" rows="5" cols="30" placeholder="Enter your comment"></textarea>
                     <span class="error"><?php echo $commentErr;?></span>
                     </div> 
					 
						<div class="form-group">
						<label for="exampleInputFile">File Upload:<sub class="lagim">*</sub></label>
						<input type="file" name="photo" id="exampleInputFile">
						<p class="help_block"><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
					  </div>
                    
                    <div class="form-group">
                         <input type="submit" class="btn btn-primary" value="Send">
                        <input type="reset" class="btn btn-primary" value="Reset">
                   </div>
             </form>
           
        </div>
         </div>
             <div class="col-md-4"></div>
            </div>
               
           </div>
      
         </section>
     
     </body>
</html>