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
.container1
{
    width:40%;
    height:385px;
    background-color:white;
    float:left;

}
.container2
{
    width:60%;
    height:385px;
    background-color:white;
    float:left;
}



.box
{
    width:70%;
    height:330px;
    background-color:white;
    margin-left:15%;
    border-radius:10px;
    margin-top:20px;


    border:2px solid gray;
    filter:drop-shadow(3px 2px 0px gray);



 
     padding-top:2px;
  

    
}
.footer
{
        width:100%;
        height:40px;
        background-color:red;
        color:white;
        clear:both;

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

<div class='container1'>
    <div class='box'>

    <center> <p style="font-size:25px; padding-top:5px; ">Blood Request Form</p></center>

    <form action="requestbloodpatient1.php">
        <p style=" padding-top:30px; padding-left:5px; " > Blood Group: </p>
        <select name='b' style="width:95% ; height:30px; margin-left:5px; margin-top:5px; border-radius:5px;" ; ><option>-Select-</option>
            <option>A</option> <option>A+</option> <option>A-</option> <option>B</option> <option>B+</option>
            <option>B-</option> <option>AB+</option> <option>AB-</option> <option>O+</option> <option>O-</option>
</select>

<p style=" padding-top:10px; padding-left:5px; ">No.of Units: </p>
<input type='text' name='u' placeholder=" No. of units (in ml)" style="width:94% ; height:30px; margin-left:5px; margin-top:5px; border-radius:5px;" >
<p  style=" padding-top:10px; padding-left:5px; ">Reason: </p>
<input type='text' name='r' placeholder=" Mention the reason" style="width:94% ; height:70px; margin-left:5px; margin-top:5px; border-radius:5px; ">
<br>
<input type='submit' value="Request" style="width:20%; background-color:red; height:30px; color:white; border-radius:5px; margin-left:5px; margin-top:5px; ">

</form>


</div>
 
    
</div>

<div class='container2'>
 <img src='bloodrequest.jpg' style=" width:80%; height:250px; margin-left:10%;  margin-top:65px; border-radius:10px; ">
    
</div>





<<div class='footer'>
<p style="text-align:center;  font-size:15px;  padding-top:10px">Project by Prashant</p>
</div>








</body>