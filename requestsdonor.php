<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF_8">
                <meta name="viewport" content="width-device-width, initial-scale=1.0">
                <title>Document</title>
    <style>
        *
        {
        margin:0px;
        padding:0px;
        }
        .header1
        {
width:58.1%;
height:25px;
background-color:red;
color:white;
padding:15px 10px;
float:left;
        }
        .header2
        {
width:40%;
height:55px;
background-color:red;
color:white;
float:left;



        }

        .x li
        {
                display:inline-block;
                padding:15px 6px;
}

.x li:hover
{
        text-decoration:underline;
}
           .x a
   {
color:white;
text-decoration:none;
font-size:16px;
}
.container
{
    width:100%;
    height:385px;
    background-color:white;
clear:both;

}
.table 
{
    margin-left:20%;
    width:60%;
    height:auto;
    border-collapse:collapse;

}
.tr1
{
        border-bottom:2px solid black;
}
.tr2

{
        border-bottom:1px solid black;
}



.footer
{
        width:100%;
        height:40px;
        background-color:red;
        color:white;
 

}




.hrr{width:90%; margin-left:5%; margin-top:10px;}






</style>





        </head>






   
 
<body>

<?php
session_start();
$a=$_SESSION['donor'];
$ed=$_SESSION['emaildonor'];

if(isset($_SESSION['donor'])==false)
{
    echo"<script>window.location.assign('donorloginpage.php')     </script> ";
    
}

?>




















    <div class='header1'>  <h3> Blood Bank Management System <span style="padding-left:140px; ">Name:

    <?php


$a=$_SESSION['donor'];
echo"$a";


    ?>






</span> </h3></div>
        <div class= 'header2'>
    <ul class='x'> 
                <li><a href="dashboarddonor.php">Dashboard</a></li>
                <li><a href="donatedonor.php">Donate</a></li>
                <li><a href="requestsdonor.php">Requests</a></li>
                <li><a href="printcertificate1.php">Print Certificate</a></li>
           
                <li><a href="bloodmgmtproject.php">Logout</a></li>
                </ul>
</div>

<div class='container'>

<h4 style="padding-top:10px; font-size:25px; ">  <center><u>Donations Requests</center></u> </h4> <br>


    <?php
    $a=1;

    $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select * from donatedonor  ";
     echo"<table class='table' >
     <tr class='tr1'><td>Sno</td><td>Donation ID</td><td>Units (in ml)</td><td>Status</td><td>Action</td></tr>";
    $res=mysqli_query($con,$q);




    while($row=mysqli_fetch_array($res))
    {
 
 
 
         echo"
         <tr class='tr2'>
 
         <td>$a</td>
         <td>$row[id]</td>
    
         <td>$row[units]</td>
         <td>$row[status]</td>
 
         <td>
       
         <a href='editrequestdonor.php?id=$row[id]'> <input type='submit' value='Edit' class='btne' ></a>
         <a href='deleterequestdonor.php?id=$row[id]'> <input type='submit' value='Delete' class='btne' ></a>  
         </td>
    
 
 
 
         </tr>
 
 
         
         
         ";
 $a=$a+1;
 
 
 
    }
 
    echo"</table>";
 
 
    
     ?>
     
 
 
 
 
 



       



</div>







<div class='footer'>
<p style="text-align:center;  font-size:15px;  padding-top:10px">Project by Prashant </p>
</div>








</body>