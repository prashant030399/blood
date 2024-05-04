<?php

$i=$_GET['id'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q= " delete from donatedonor where id=$i and status='no action' " ;
$res=mysqli_query($con,$q);
if($res==true)
{
echo"delete";
}
else
{
    echo"error";
}

?>





