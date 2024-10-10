<?php 
   include("config.php");
   session_start();
   if(isset($_POST['submit']))
   {
       

           $email=$_POST['email'];
           $password=$_POST['password'];
           $query="select * from register where Email='.$email.' and Password='.$password.'";
          $result=mysqli_query($conection,$query);   
          if($result)
          {
              $_SESSION['email']=$email;
              header("Location:selected.php");
          } 
          else{
            echo" not submit";
          }
   }  
?>
<table border="1">
    <form method="post">
          
             <p>Email</p>
            <input type="email" name="email">
            <p>Password</p>
            <input type="password" name="password">
            <input type="submit" name="submit">
    </form>
</table>