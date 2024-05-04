

<?php
$i=$_GET['i'];
$b=$_GET['b'];
$u=$_GET['u'];
$d=$_GET['d'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
 $q=" update donatedonor set bloodgroup='$b', units='$u', diseases='$d' where id='$i' and status='no action'   ";
$res=mysqli_query($con,$q);
if($res==true)
{
echo" updated";
echo"<script>window.location='requestsdonor.php'</script> "    ;

}
else
{
    echo"error";
}









?>