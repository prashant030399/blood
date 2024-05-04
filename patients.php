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
width:50%;
height:auto;
margin-left:25%;


}

</style>







        </head>






   
 
<body>

    <div class='header1'>  <h3> Blood Bank Management System <span style="padding-left:140px; ">Name:Admin Here</span> </h3></div>
        <div class= 'header2'>
    <ul class='x'> 
                <li><a href="dashboardadmin.php">Dashboard</a></li>
                <li><a href="donors.php">Donors</a></li>
                <li><a href="patients.php">Patients</a></li>
                <li><a href="donations.php">Donations</a></li>
                <li><a href="requests.php">Requests</a></li>
                <li><a href="bloodmgmtproject.php">Logout</a></li>
                </ul>
</div>

<div class='container'>
      <h4 style="padding-top:10px; font-size:25px; ">  <center><u>List of all Patients</center></u> </h4> <br>

    
                <table border='1' class='table'> <tr> <td>S.No</td>
                <td>Patient ID</td>
                <td>Patient Name</td>
                <td>Patient Email</td>
                <td>Contact No.</td>
                <td>Action</td>
                
        </tr>
</table>










</div>
<<div class='footer'>
<p style="text-align:center;  font-size:15px;  padding-top:10px">Project by Prashant </p>
</div>








</body>
<html>

