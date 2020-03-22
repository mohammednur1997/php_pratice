


<?php
//session set korar jonno php code
session_start();
$_session['view']=1;
?>


<html>
    <body>
       <?php
        //sessoin retrieve korar jonno php code
        
        if (isset($_session['view']))
            
        $_session['view']=$_session['view']+1;
        else
            $_session['view']=1;
        echo "preview=" .$_session['view'];
    ?>
        
         </body>
</html>



