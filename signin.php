<?php
require_once "db.php";
//check the post method fields 
  if ( !empty($_POST['name']) && !empty($_POST['email'])
&& !empty($_POST['pass'])) {
    //first (username, password, email) data base field Values from post method 
$sql = "insert into users  (username, password, email)VALUES (:username, :password, :email)";
//prepare insert statment
$stmt = $pdo->prepare($sql);
//execute insert statment
if( $stmt->execute(array(
':username' => $_POST['name'],
':password' => $_POST['pass'],
':email' => $_POST['email']))==true);
  //redirect the user to login page
  header("location:login.php");
}
//close connection
$pdo=null;
?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	
	<link rel="stylesheet" type="text/css" href="css/logandreg.css">
</head>

<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<form method="post">
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="text" class="input" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR USERNAME</p>
    <input type="text" class="input" name="name" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" class="input" name="pass" required min="6" max="10" >
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">submit</button>
</form>

</body>
</html>