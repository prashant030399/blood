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
width:80%;
height:auto;
margin-left:10%;
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

.btne
{
        width:55px;
        height:20px;
  
        border-radius:5px;
        border:none;
        color:white;
        background-color:green;

        margin-top:2px;
        margin-bottom:2px;
}
.btnd
{
        width:45px;
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
      <h4 style="padding-top:10px; font-size:25px; ">  <center><u>Manage Blood Request</center></u> </h4> <br>

      <?php
      $b=1;
     
      $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
       $q=" select * from requestpatient ";
      $res=mysqli_query($con,$q);
echo"
<table  class='table' > <tr class='tr1'> 
<td>S.No</td>
               
                <td>Request ID</td>
                <td>Patient Name</td>
                <td>Contact No.</td>
                <td>Blood Group</td>
                <td>Units(in ml)</td>
                <td>Reason</td>
                <td>Status</td>
                <td>Action</td>
                </tr>
                ";

                
                
                
session_start();
$a=$_SESSION['patient'];
$cp=$_SESSION['contactnopatient'];



      while($row=mysqli_fetch_array($res))
      {


echo" <tr class='tr2'>
<td>$b</td>

               
                <td>$row[id]</td>
                <td>$row[patientname]</td>
                <td>$row[patientcontactno]</td>
                <td>$row[bloodgroups]</td>
                <td>$row[units]</td>
                <td>$row[reasons]</td>
                <td>$row[status]</td>
                <td>
                <a href='approverequestpatientadmin.php?id=$row[id]'>  <input type='submit' value='Approve' class='btne' ></a>
        <a href='rejectrequestpatientadmin.php?id=$row[id]'>  <input type='submit' value='Reject' class='btnd' ></a>  

                </td> 
                </tr>


";
$b=$b+1;
      }

      echo"</table>";
      
    
?> 










</div>
<div class='footer'>
<p style="text-align:center;  font-size:15px;  padding-top:10px">Project by Prashant </p>
</div>








</body>
<html>