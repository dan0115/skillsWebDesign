<?php
   
   
        $email = $_GET['email'];
        $password= $_GET['password'];
   
    
if ($email=="pasoa@gmail.com" && $password=="1234") {
    header("Location: http://127.0.0.1:80/home.html"); 
exit();
}
else {header("Location: http://127.0.0.1:80/index.html"); 
    exit();

}
?>