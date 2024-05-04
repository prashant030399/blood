

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
    width:40%;
    height:355px;
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




.hrr{width:90%; margin-left:5%; margin-top:0px;}


.name
{
    font-size:15px;
    margin-left:10%;

}
.inputbox
{
    width:80%; height:25px; border-radius:5px; 
}

.button
{
    margin-left:10%; font-size:15px; margin:-left:10%; background-color:red; width:20%; height:30px; border-radius:5px; color:white; border:none; " 
}





</style>







        </head>

<body>

        <div class='header1'>  <h3> Blood Bank Management System <span style="padding-left:140px; "></span> </h3></div>
        <div class= 'header2'>
    <ul class='x'> 
    <li><a href="dashboardadmin.php">Dashboard</a></li>
                <li><a href="donorsadmin.php">Donors</a></li>
                <li><a href="patientsadmin.php">Patients</a></li>
                <li><a href="donationsadmin.php">Donations</a></li>
                <li><a href="requestsadmin.php">Requests</a></li>
                <li><a href="bloodmgmtproject.php">Logout</a></li>
                </ul>
</div>

<div class='container'>
    <br>
    
    <div class='box'>

    <!-- <p style="text-align:center; padding-top:10px; font-size:20px;" > Registration  Page </p>
    <hr class='hrr'><br>

    <p style="font-size:15px; margin-left:10%;   " > DonorID:</p>
    <p style="font-size:15px; margin-left:10%; " > <input type='text' name='t0' id='t0' placeholder='Enter donorID'  style="width:80%; height:25px; border-radius:5px;  " >


    <p style="font-size:15px; margin-left:10%; margin-top:5px;  " > Name:</p>
    <p style="font-size:15px; margin-left:10%; " > <input type='text' name='t1' id='t1' placeholder='Enter your name'  style="width:80%; height:25px; border-radius:5px;  " >

    <p  style="font-size:15px; margin-left:10%; margin-top:5px;  "> Email:</p>

    <p  style="font-size:15px; margin-left:10%;"> <input type='email' name='t2' id='t2' placeholder='Enter email' style="width:80%; height:25px;  border-radius:5px; " >
    

    <p  style="font-size:15px; margin-left:10%; margin-top:5px;  "> Password:</p>
    <p  style="font-size:15px; margin-left:10%;"> <input type='password' name='t3' id='t3' placeholder='Enter password' style="width:80%; height:25px;  border-radius:5px; " >
    

    <p  style="font-size:15px; margin-left:10%; margin-top:5px;  "> Contact No.:</p>
    <p  style="font-size:15px; margin-left:10%;"> <input type='text' name='t4' id='t4' placeholder='Enter contact no.' style="width:80%; height:25px;  border-radius:5px; " >
    




    <br> <br>

    <input type='submit' value=" Register"  style="font-size:15px; margin:-left:10%; background-color:red; width:20%; height:30px; border-radius:5px; color:white; border:none; " >
<span style="font-size:17px; border-weight:5px">Already registered?</span> <span style="color:blue; font-size:13px; "><a href="donor.php"><u>Login Here</a></u></span></span> -->

<p style="text-align:center; padding-top:10px; font-size:20px;" > Edit Patient Page </p>
    <hr class='hrr'><br>

    


<form action="editpatientnew1.php">

<?php
$e=$_GET['id'];

$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
 $q=" select * from patientlogin2 where email='$e' ";
$res=mysqli_query($con,$q);

while($row=mysqli_fetch_array($res))
{

echo"
<p class='name'> PatientID:</p>
<p class='name'> <input  value ='$row[patientid]' type='text' name='i'  class='inputbox' > </p>

<p class='name'> Name:</p>
<p class='name'> <input  value ='$row[name]' type='text' name='n'  class='inputbox' > </p>

<p class='name'> Email:</p>
<p class='name'> <input  value ='$row[email]' type='email' name='e'  class='inputbox' > </p>

<p class='name'> Password:</p>
<p class='name'> <input  value ='$row[password]' type='password' name='p'  class='inputbox' > </p>

<p class='name'> Contactno:</p>
<p class='name'> <input  value ='$row[contactno]' type='text' name='c'  class='inputbox' > </p>

";

}

?>
<br>
<input type='submit' value="update" class='button'>



</form>















    </div>
</div>














<div class='footer'>
<p style="text-align:center;  font-size:15px;  padding-top:10px">Project by Prashant</p>
</div>





</body>
</html>






