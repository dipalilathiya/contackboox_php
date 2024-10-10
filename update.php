<?php 
   include("config.php");
   if(isset($_POST['submit']))
   {     
        $id=$_GET ['updateid'];  
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $date=$_POST['date'];
        $email=$_POST['email'];
        $password=$_POST['password'];
       
          $query="update register set Name='$name',Contact='$contact',Date='$date',Email='$email',Password='$password' where id='$id'";   
          $result=mysqli_query($conection,$query);   
          if($result)
          {
              header("Location:selected.php");
          } 
          else{
            echo"not submit";
          }
   }  
?>
<table border="1">
    <form method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <p >Name:</p>
            <input type="text" name="name">
            <p>Contact</p>
            <input type="number" name="contact">
            <p>Date</p>
            <input type="text" name="date">
            <p>Email</p>
            <input type="email" name="email">
            <p>Password</p>
            <input type="password" name="password">
            <input type="submit" name="submit">
    </form>
</table>