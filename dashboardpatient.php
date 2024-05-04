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
.box
{
    width:20%;
    height:120px;
    background-color:white;
    margin-left:3.6%;
    border-radius:10px;
    margin-top:20px;


    border:2px solid gray;
    filter:drop-shadow(3px 2px 0px gray);



    text-align:center;
     padding-top:2px;
     float:left;

    
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
$a=$_SESSION['patient'];
$ep=$_SESSION['emailpatient'];
if(isset($_SESSION['patient'])==false)
{
    echo"<script>window.location.assign('patientloginpage.php')     </script> ";
    
}

?>






    <div class='header1'>  <h3> Blood Bank Management System <span style="padding-left:140px; ">Name:

<?php


$a=$_SESSION['patient'];
echo"$a";


?>





</span> </h3></div>
        <div class= 'header2'>
    <ul class='x'> 
                <li><a href="dashboardpatient.php">Dashboard</a></li>
                <li><a href="requestbloodpatient.php">Request Blood</a></li>
                <li><a href="requestshistorypatient.php">Requests History</a></li>
               
                <li><a href="bloodmgmtproject.php">Logout</a></li>



                </ul>
</div>

<div class='container'>
 
    <div class='box'><p style=" font-size:25px; color:red; padding-top:30px;" > Blood Requested </p> 
    
    
    <p>
        <?php
        
        $ep=$_SESSION['emailpatient'];
        $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
        $q=" select sum(units) as count from requestpatient where status='Approved' and email='$ep' ";
       $res=mysqli_query($con,$q);
       if($row=mysqli_fetch_array($res))
       {
        $a=$row['count'];
        if($a!=0)
        {
            echo" Total: $a Units  ";
        }
        else 
        {
            echo" Total: 0 Unit  ";
        }
    }

   


?>
        
  
    </p></div>
    <div class='box'><p style=" font-size:25px; color:red; padding-top:30px;" > Total Requests </p> <p >Total:      
<?php

$ep=$_SESSION['emailpatient'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q=" select count(id)  as count from requestpatient where email='$ep'   ";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
$a=$row['count'];
echo"$a";
}
?>
</p></div>

    <div class='box'><p style=" font-size:25px; color:red; padding-top:30px;" > Request Pending</p> <p >Total:
    <?php
    $ep=$_SESSION['emailpatient'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q=" select count(id)  as count from requestpatient where status='no action' and email='$ep'  ";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
$a=$row['count'];
echo"$a";
}
?>   
    </p></div>
    <div class='box'><p style=" font-size:25px; color:red; padding-top:30px;" > Request Accepted </p> <p >Total:
    <?php
    $ep=$_SESSION['emailpatient'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q=" select count(id)  as count from requestpatient where status='Approved' and email='$ep' ";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
$a=$row['count'];
echo"$a";
}
?>     
    </p></div>
    <div class='box'><p style=" font-size:25px; color:red; padding-top:30px;" > Request Rejected </p> <p >Total:
    <?php
    $ep=$_SESSION['emailpatient'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q=" select count(id)  as count from requestpatient where status='Rejected' and email='$ep'  ";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
$a=$row['count'];
echo"$a";
}
?>   
    </p></div>
    
   

</div>




<div class='footer'>
<p style="text-align:center;  font-size:15px;  padding-top:10px">Project by Prashant </p>
</div>










</body>




