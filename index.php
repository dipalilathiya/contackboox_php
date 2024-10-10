<?php
include("config.php");
if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $date = $_POST['date'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $image = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];
  move_uploaded_file($tmp_name, "images/$image");

  $query = "insert into register (Img,Name,Contact,Date,Email,Password)values('$image','$name','$contact','$date','$email','$password')";
  $result = mysqli_query($conection, $query);
  if ($result) {
    header("Location:login.php");
  } else {
    echo "not submit";
  }
}
?>
<table border="1" style="background-color:red">
  <style>
    .container {
      width: 450px;
      margin: auto;
      height: 500px;
      background-color: powderblue;
      border-radius:25px;
      box-shadow:2px 2px 15px 0px;
    }

    .box {
      display: flex;
      width: 200px;
      height: 30px;
      padding: 20px 30px;
    }

    .box1 {
      background-color: lightgray;
      width: 100px;
      height: 30px;
    }
    p{
      width: 200px;
      height: 20px;
    }
    input{
      width: 200px;
      height: 30px;
      margin-left: 20px;
    }
  </style>
  <form method="post" enctype="multipart/form-data">
    <div class="container">
    
      <div class="box">
        <p>Name:</p>
        <input type="text" name="name">
      </div>
      <div class="box">
        <p>Contact:</p>
        <input type="number" name="contact">
      </div>
      <div class="box">
        <p>Date:</p>
        <input type="text" name="date">
      </div>
      <div class="box">
        <p>Email:</p>
        <input type="email" name="email">
      </div>
      <div class="box">
        <p>Password:</p>
        <input type="password" name="password">
      </div>
      <div class="box">
        <input type="submit" name="submit">
      </div>
      <div class="box">
      <input type="file" name="image">
      </div>
    </div>
  </form>
</table>