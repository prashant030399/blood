
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    *
    {
        margin:0px;
        padding:0px;
    }
    .header
    {
        width:80%;
        height:50px;
        margin-left:10%;
        background-color:white;
color:red;

font-size:50px;
display:flex;
justify-content:center;



    }
    .container1
    {
        width:80%;
        height:auto;
        margin-left:10%;
        background-color:white;
color:red;

font-size:60px;
display:flex;
justify-content:center;
align-items:center;

    }
    .container2
    {
        width:80%;
        height:auto;
        margin-left:10%;
        background-color:white;
color:black;

font-size:40px;
display:flex;
justify-content:center;
align-items:center;
    }

    .container3
    {
        width:80%;
        height:auto;
        margin-left:10%;
        background-color:white;
color:black;

font-size:50px;
display:flex;
justify-content:center;
align-items:center;
    }
    .container4
    {
        width:80%;
        height:auto;
        margin-left:10%;
        background-color:white;
color:black;

font-size:25px;
display:flex;
justify-content:center;
align-items:center;
    }
    .container5
    {
        width:80%;
        height:auto;
        margin-left:10%;
        background-color:white;
color:black;

font-size:25px;
display:flex;
justify-content:center;
align-items:center;

    }
    .footer
    {
        width:80%;
        height:auto;
        margin-left:10%;
        background-color:white;
    }









</style>
<body>
    <div class='header'>Certificate of</div>
    <div class='container1'>Appreciation </div>

<div class='container2'>This certificate is presented to</div>
<div class='container3'> Mr./Mrs. 
    
<?php
session_start();
$a= $_SESSION['donor'];

$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q=" select * from donatedonor where donorname='$a' and status='Approved' ";
$res=mysqli_query($con,$q);
if($row=mysqli_fetch_array($res))
{

echo"  $a";
}
?>





</div> <br>
<div class='container4'> In recognition to his contribution for voluntary "Blood Donation"       </div> <br>
<div class='container5'> We thank you for your contribution towards the noble cause and your selfless service extended for the cause of humanity.       </div>
<div class='footer'> <img src='badge.jpg' style=" width:40%; height:130px; margin-left:30%; " >


</div>










    
</body>


</html>








