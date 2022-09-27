<?php
session_start();
include('../includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title> PC Rx </title>
<meta charset="utf-8">
<meta name="viewport" content=""width="device-width">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/style2.css">
<link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="../css/bootstrap2.min.css">
<link rel = "shortcut icon"  href = "../images/logo.png" />
</head>
<body>
 
  <h2 style="margin-top: 150px;margin-bottom: 20px" class="text-center text-bold mt-4x">Admin Login</h2>
 <div class="card mx-auto" style="width: 20rem;">

      <div class="card-body">
        <!-- this form cant be submit directly as it has onsubmit return false -->
        <form method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" name="username"  placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password"  placeholder="Password">
        </div>
        <button type="submit" class="btn-block btn-warning" name="login" style="height: 50px;color:#ffffff; font-weight: bold; font-size: 20px;">LOG-IN</button>
            </form>
      </div> 
    </div>
</body>
</html>
