<?php 
     include("config.php");
     session_start();
?>
<table>
     <style>
           .box1{
               border-radius: 10px;
               box-shadow: 1px 1px 10px 1px;
               background-color: powderblue;
           }
     </style>
</table>
<p>
      <?php 
             $email=$_SESSION['email'];
             $query1="select * from register where email='$email'";  
             $result1=mysqli_query($conection,$query1);
             ?>
        <?php
             while($row = mysqli_fetch_array($result1))
             {
                $image=$row['Img'];
                $name=$row['Name'];
                if(mysqli_num_rows($result1)>0)
                {
                     echo'<tr>
                     <td  class="box1"><img src="images/'.$image.'" alt="not found" width="50px" height="50px"   margin-left="50px" , style="border-radius:2000px"></img></td>
                        <td style= "margin-top: 25px">'.$name.'</td>  
                     </tr>';
                }
             }
        ?>
</p>
<?php
     if(isset($_POST['submit'])){
          
        $search=$_POST['search'];
        $query="select * from register where name like '%$search%'";  
        $result=mysqli_query($conection,$query);   
     }
    else
    {
    $query="select * from register";  
    $result=mysqli_query($conection,$query);   
   }
     ?>
<table border="1" class="box1">
      
           <form method="post">
              <input type="text" name="search">
              <input type="submit" name="submit">
           </form>
          <tr>
                <th>Id</th> 
               <th>Image</th>
               <th>Name</th>
               <th>Contact</th>
               <th>Date</th>
               <th>Email</th>
               <th>Password</th>
               <th>update</th>
               <th>delete</th>
          </tr>   
<?php
     while($row = mysqli_fetch_array($result))
     {
        $id=$row['id'];
        $image=$row['Img'];
        $name=$row['Name'];
        $contact=$row['Contact'];
        $date=$row['Date'];
        $email=$row['Email'];
        $password=$row['Password'];

        if(mysqli_num_rows($result)>0)
        {
             echo'<tr>
               <td><img src="images/'.$image.'" alt="not found" width="50px" height="50px"></img></td>
               <td>'.$id.'</td>
               <td>'.$name.'</td>
               <td>'.$contact.'</td>
               <td>'.$date.'</td>
               <td>'.$email.'</td>
               <td>'.$password.'</td>
               <td><button><a href="update.php?updateid='.$id.'" >update</a></button></td>
               <td><button><a href="delete.php?deleteid='.$id.'" >delete</a></button></td>
             </tr>';
        }
     }
?>
</table>

<p>
      <?php 
             
             $email=$_SESSION['email'];
             echo  $email;
             $query1="select * from register where email='$email'";  
             $result1=mysqli_query($conection,$query1);
             ?>
         <table border="1">
                  <tr>
                       <th>Image</th>
                       <th>Name</th>
                       <th>Contact</th>
                       <th>Date</th>
                       <th>Email</th>
                       <th>Password</th>
                  </tr>   
        <?php
             while($row = mysqli_fetch_array($result1))
             {
                $image=$row['Img'];
                $name=$row['Name'];
                $contact=$row['Contact'];
                $date=$row['Date'];
                $email=$row['Email'];
                $password=$row['Password'];
        
                if(mysqli_num_rows($result1)>0)
                {
                     echo'<tr>
                     <td><img src="images/'.$image.'" alt="not found" width="50px" height="50px"></img></td>
                       <td>'.$name.'</td>
                       <td>'.$contact.'</td>
                       <td>'.$date.'</td>
                       <td>'.$email.'</td>
                       <td>'.$password.'</td>
                     </tr>';
                }
             }
        ?>
        </table>
</p>