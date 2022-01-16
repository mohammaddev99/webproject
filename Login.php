<?php 
session_start();  
  require_once "db.php";
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
                $statement = $pdo->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:index.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
   
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	
	<link rel="stylesheet" type="text/css" href="css/logandreg.css">
</head>

<body>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	

<form method="post">
  <label>
    <p class="label-txt">ENTER YOUR  USERNAME</p>
    <input type="text" class="input" name="username" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" class="input"name="password" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit" name="login">Login</button><br>
  <label>Don't have an acount? <a href="C:\Users\moham\OneDrive\Desktop\signin.html">Sign Up</a></label>

</form>
</body>
</html>