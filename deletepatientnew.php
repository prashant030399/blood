
<?php
$i=$_GET['id'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
 $q=" delete from patientlogin2 where email='$i' ";
$res=mysqli_query($con,$q);
if($res==true)
{
echo" deleted";

}
else
{
    echo"error";
}




?>