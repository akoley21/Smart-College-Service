
<?php
include('assets\php\curd.php');
if(isset($_REQUEST['submit']))
{
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
$obj=new Crud();
$sql="SELECT * FROM admin WHERE email='".$email."' AND pass='".$pass."'" ;
$res=$obj->login($sql);
if($row=mysqli_fetch_array($res))
{  
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    header("location:index.php");
}
else
{
    header("location:login_er.php");
    
}
    
}


?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMIN LOGIN | RELDOR</title>
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">ADMIN LOGIN</div>
<form action="login.php" method="POST">
        <div class="field">
          <input type="text" name="email" required>
          <label>Email Address</label>
        </div>
<div class="field">
          <input type="password" name="pass" required>
          <label>Password</label>
</div>
<div class="content">
          <div class="checkbox">
            
            <label>Wrong Email id or Password !</label>
          </div>

</div>
<div class="field">
          <input type="submit" name="submit" value="Login">
        </div>
<div class="signup-link">
Authorised Person Only</div>
</form>
</div>
</body>
</html>
