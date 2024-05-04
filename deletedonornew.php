

<?php
$e=$_GET['id'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q= " delete from donorlogin2 where email='$e' ";
$res=mysqli_query($con,$q);
if($res==true)
{
    echo"delete";
}
else 
{
    echo" error";
}




?>