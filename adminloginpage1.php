


<?php

$e=$_GET['t1'];
$p=$_GET['t2'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q=" select * from login where email='$e' and password='$p' ";
$res=mysqli_query($con,$q);
if($row=mysqli_fetch_array($res))
{
  session_start();
    $c=$row['email'];
    $_SESSION['admin']=$c;


echo" <script>alert('login successfully')</script>";
  echo" <script>window.location='dashboardadmin.php?id=$row[email]'</script>";
  
 
}
else 
{
echo"Incorrect email or password";
}


    

?>

