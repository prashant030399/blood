<?php
$b=$_GET['b'];
$u=$_GET['u'];
$r=$_GET['r'];
session_start();
$ep=$_SESSION['emailpatient'];





$cp=$_SESSION['contactnopatient'];
$a=$_SESSION['patient'];







$s='no action';
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q=" insert into requestpatient values(NULL,'$b','$u','$r','$s','$ep','$a','$cp')";
$res=mysqli_query($con,$q);
if($res==true)
{
    echo"save";
}
else
{
    echo"error";
}







?>