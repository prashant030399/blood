

<?php



$i=$_GET['i'];
$n=$_GET['n'];
$e=$_GET['e'];
$p=$_GET['p'];
$c=$_GET['c'];


$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
 $q=" update donorlogin2 set name='$n', email='$e', password='$p', contactno='$c'  where donorid='$i' ";
$res=mysqli_query($con,$q);
if($res==true)
{
echo" update";

}
else{
    echo"error";
}




?>











