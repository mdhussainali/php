
<?php

include 'connect.php';

if(isset($_POST['update'])){
          //echo "<script> alert('You are successfully')</script>";
        /** fetch data from reg form and prevent theme from sql injection */
        $email = mysqli_escape_string($conn,$_POST['email']) ;
        // md5 is encryted password
        $password = mysqli_escape_string($conn,md5($_POST['pwd']));
        $dob = mysqli_escape_string($conn,$_POST['date']);
        $id = mysqli_escape_string($conn,$_POST['uid']);

        $sql = "UPDATE user SET email='$email',password='$password', dob='$dob' WHERE id='$id'";
        $query = mysqli_query($conn,$sql);
        if($query){
          header('location:select.php');

        }

        else{
          echo "<script> alert('someting went wrong')</script>".mysqli_error($conn);
        }
      } 
        /** Insert Query */
        $id ='';
        $email = '';
        $password = '';
        $dob = '';

if(isset($_GET['id'])){
  $sql = "SELECT * FROM user where id=".$_GET['id'];
  $query = mysqli_query($conn,$sql);
  if($query){
    if(mysqli_num_rows($query)>0){
      while($row=mysqli_fetch_assoc($query)){
        $id = $row['id'];
        $email = $row['email'];
        $password = $row['password'];
        $dob = $row['dob'];
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=email], input[type=password],input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=email]:focus, input[type=password]:focus,input[type=date]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="container">
  <h2>Update information</h2>
  <form class="from horizontal" method="POST" action="edit.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" value="<?= $email?>" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" value="<?= $password?>" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="date">
    <label for="date"><b>Date of Birth</b></label>
      <input type="date" value="<?= $dob?>" name="date" required>
    </div>

    <div class="date">
    
      <input type="hidden"  id="uid" value="<?=$id;?>" name="uid">
    </div>
  
    <button type="submit" name="update" class="btn btn-default">Update information</button>
  </form>
</div>
</body>
</html>