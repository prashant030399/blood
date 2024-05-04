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
    width:17%;
    height:100px;
    background-color:white;
    margin-left:2.5%;
    border-radius:10px;
    margin-top:20px;


    border:2px solid gray;
    filter:drop-shadow(2px 3px 0px gray);



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

.table
{
width:60%;
height:auto;
margin-left:20%;
border-collapse:collapse;

}


.btne
{
        width:30px;
        height:20px;
        background-color:green;
        border-radius:5px;
        border:none;
        color:white;

        margin-top:2px;
        margin-bottom:2px;
}
.btnd
{
        width:42px;
        height:20px;
        background-color: #bb0a1e;
        border-radius:5px;
        border:none;
        color:white;
        
        margin-top:2px;
        margin-bottom:2px;
        margin-left:3px;
 
}

.btne:hover
{
        box-shadow:1px 1px 10px 0px gray;
}

.btnd:hover
{
        box-shadow:1px 1px 10px 0px gray;
}
.tr1
{
        border-bottom:2px solid black;
}
.tr2
{
        border-bottom:1px solid black;
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
      <h4 style="padding-top:10px; font-size:25px; ">  <center><u>List of all Patients</center></u> </h4> <br>

    <?php
    $a=1;
    
$con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
$q="  select * from patientlogin2  ";
$res=mysqli_query($con,$q);
echo"<table  class='table'> <tr class='tr1'> 
<td>S.No.</td>
<td>Patient ID</td>
<td>Patient Name</td>
<td>Patient Email</td>
<td>Contact No.</td>
<td>Action</td>

</tr> ";
while($row=mysqli_fetch_array($res))
{
echo" <tr class='tr2'>
<td>$a</td>
<td>$row[patientid]</td>
<td>$row[name]</td>
<td>$row[email]</td>
<td>$row[contactno]</td>
<td>     <a href='editpatientnew.php?id=$row[email]'>  <input type='submit' value='Edit' class='btne' ></a>
<a href='deletepatientnew.php?id=$row[email]'>  <input type='submit' value='Delete' class='btnd' ></a>      </td>
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
<html>

