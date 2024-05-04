<?php
$i=$_GET['t0'];
$n=$_GET['t1'];
$e=$_GET['t2'];
$p=$_GET['t3'];
$c=$_GET['t4'];

$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
 $q="insert into donorlogin2 values('$i','$n','$e','$p','$c')";
$res=mysqli_query($con,$q);
if($res==true)
{
    echo"<script>alert('Saved successfully')</script>";
    echo"<script>window.location='donorloginpage.php'</script>";

}
else 
{
    echo"error";
}










?>