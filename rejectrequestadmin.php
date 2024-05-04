<?php
$i=$_GET['id'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
 $q=" update donatedonor set status='Rejected' where status='no action' and id=$i ";
$res=mysqli_query($con,$q);
if($res==true)
{
    
    echo"<script>window.location='donationsadmin.php'</script>"; 
}
else 
{
    echo"<script>alert('error')</script> ";
    
}

?>