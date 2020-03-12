<?php
ob_start();
require 'header.php';
?>

<?php
require 'connection.php';
session_start();

if (isset($_POST['username'])){

$username = stripslashes($_REQUEST['username']); 
$username = mysqli_real_escape_string($conn,$username); 
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conn,$password);

$username=$_POST['username'];
$password=$_POST['password'];



    $query = "SELECT * FROM `admins` WHERE username='$username' and password='".md5($password)."'";
$rezultat = mysqli_query($conn,$query) or die(mysql_error());
$rows = mysqli_num_rows($rezultat);
    if($rows==1){
  $_SESSION['username'] = $username;


  header("Location: ./admin/admin.php");
        }else{
    echo "<div class='ispisgreskelogin'><h3>Incorrect credentials.</h3><br/>Go to <a href='login.php'>Login</a></div>";
    }
}else{
?>

<main>
<h1>Log in as admin</h1>

<form action="login.php" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" id="dugme"/>
</form>

<?php } ?>

</main>


<?php
require 'footer.php';
ob_flush();
?>
