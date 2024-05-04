

<?php
$i=$_GET['i'];
$b=$_GET['b'];
$u=$_GET['u'];
$d=$_GET['d'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
 $q=" update requestpatient set bloodgroups='$b', units='$u', reasons='$d' where id='$i' and status='no action'   ";
$res=mysqli_query($con,$q);
if($res==true)
{
echo" updated";
echo"<script>window.location='requestshistorypatient.php'</script> "    ;

}
else
{
    echo"error";
}