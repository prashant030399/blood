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
    height:365px;
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
<form action="adminloginpage1.php">
    <div class='header1'>  <h3> Blood Bank Management System </h3></div>
        <div class= 'header2'>
    <ul class='x'> 
                <li><a href="bloodmgmtproject.php">Home</a></li>
                <li><a href="adminloginpage.php">Admin</a></li>
                <li><a href="donor.php">Donor</a></li>
                <li><a href="patient.php">Patient</a></li>
                </ul>
</div>

<div class='container'>
    <br>
    
    <div class='box'>

    <p style="text-align:center; padding-top:10px; font-size:30px;" > Register  Page </p>
    <hr class='hrr'><br>


    <p style="font-size:15px; margin-left:10%;  " > Name:</p>
    <p style="font-size:15px; margin-left:10%; " > <input type='text' name='t1' id='t1' placeholder='Enter your name'  style="width:80%; height:25px; border-radius:5px;  " >

    <p  style="font-size:15px; margin-left:10%; margin-top:15px;  "> Email:</p>

    <p  style="font-size:15px; margin-left:10%;"> <input type='email' name='t2' id='t2' placeholder='Enter email' style="width:80%; height:25px;  border-radius:5px; " >
    

    <p  style="font-size:15px; margin-left:10%; margin-top:15px;  "> Password:</p>
    <p  style="font-size:15px; margin-left:10%;"> <input type='email' name='t3' id='t3' placeholder='Enter password' style="width:80%; height:25px;  border-radius:5px; " >
    

    <p  style="font-size:15px; margin-left:10%; margin-top:15px;  "> Contact No.:</p>
    <p  style="font-size:15px; margin-left:10%;"> <input type='email' name='t4' id='t4' placeholder='Enter contact no.' style="width:80%; height:25px;  border-radius:5px; " >
    




    <br> <br>

    <input type='submit' value=" Register"  style="font-size:15px; margin:-left:10%; background-color:red; width:20%; height:30px; border-radius:5px; color:white; border:none; " >
<span style="font-size:17px; border-weight:5px">Already registered?</span> <span style="color:blue; font-size:13px; "><a href="donor.php"><u>Login Here</a></u></span></span>



    </div>
</div>
<<div class='footer'>
<p style="text-align:center;  font-size:15px;  padding-top:10px">Project by Prashant </p>
</div>






</form>

</body>

