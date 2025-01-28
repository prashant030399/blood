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
width:68.1%;
height:25px;
background-color:red;
color:white;
padding:15px 10px;
float:left;
        }
        .header2
        {
width:30%;
height:55px;
background-color:red;
color:white;
float:left;



        }

        .x li
        {
                display:inline-block;
                padding:15px 10px;
}
           .x a
   {
color:white;
text-decoration:none;
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
    width:40%;
    height:300px;
    background-color:white;
    margin-left:30%;
    border-radius:10px;


    border:2px solid gray;
    filter:drop-shadow(3px 2px 0px gray);

    
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






<form>
    <div class='header1'>  <h3> Blood Bank Management System </h3></div>
        <div class= 'header2'>
    <ul class='x'> 
    <li><a href="bloodmgmtproject.php">Home</a></li>
                <li><a href="adminloginpage.php">Admin</a></li>
                <li><a href="donorloginpage.php">Donor</a></li>
                <li><a href="patientloginpage.php">Patient</a></li>
                </ul>
</div>

<div class='container'>
    <br><br>
    <div class='box'>

    <p style="text-align:center; padding-top:20px; font-size:30px;" > Admin login Page </p> 
    <hr class='hrr'><br>


    <p style="font-size:20px; margin-left:10%;  " > Email:</p>
    <p style="font-size:20px; margin-left:10%; " > <input type='email' name='t1' id='t1' placeholder='Enter email ID'  style="width:80%; height:30px; border-radius:5px; border:'1'; " >
<br>
    <p  style="font-size:20px; margin-left:10%; margin-top:15px;  "> Password:</p>

    <p  style="font-size:20px; margin-left:10%;"> <input type='password' name='t2' id='t2' placeholder='Enter Password' style="width:80%; height:30px;  border-radius:5px; " >
    <br>
    <br>

    <input type='submit' value=" Login"  style="font-size:17px; margin:-left:10%; background-color:red; width:20%; height:30px; border-radius:5px; color:white; border:none; " >




    </div>
</div>
<<div class='footer'>
<p style="text-align:center;  font-size:15px;  padding-top:10px">Project by Prashant </p>
</div>






</form>

</body>

<?php

if(isset($_GET['t1']))
{

$e=$_GET['t1'];
$p=$_GET['t2'];
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q=" select * from login where email='$e' and password='$p' ";
$res=mysqli_query($con,$q);
if($row=mysqli_fetch_array($res))
{


  echo" <script>window.location='dashboardadmin.php'</script>";
  
 
}
else 
{
echo"Incorrect email or password";
}
}


    

?>



