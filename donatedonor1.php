<?php

$b=$_GET['b'];
$u=$_GET['u'];
$d=$_GET['d'];
session_start();

$ed=$_SESSION['emaildonor'];
$a=$_SESSION['donor'];

  $cd=$_SESSION['contactnodonor'];


  






$s='no action';

$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');

$q= " insert into donatedonor values(NULL, '$b','$u','$d','$s','$ed','$a','$cd') ";
$res=mysqli_query($con,$q);
if($res==true)
{

echo"save ";

}
else
{
    echo"error";
}






?>