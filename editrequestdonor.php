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
    height:300px;
    background-color:white;
    margin-left:30%;
    border-radius:10px;
    margin-top:25px;
    
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
    margin-left:%; font-size:15px;  background-color:red; width:20%; height:30px; border-radius:5px; color:white; border:none; " 
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

    <p style="text-align:center; padding-top:10px; font-size:20px;" > Edit Donor Request Page </p>
    <hr class='hrr'><br>






<form action="editrequestdonor1.php">
    <?php
    $i=$_GET['id'];
    $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
 $q=" select * from donatedonor where id=$i  ";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
    echo"


   
     
    

    
    
   
    
    
   

    
   



    <p class='name'> DonorID:</p>
    <p class='name'><input value='$row[id]' type='text' name='i' class='inputbox'></p>



    <p class='name'> Bloodgroup:</p>
    <p class='name'> <input value='$row[bloodgroup]' type='text' name='b' class='inputbox'></p>


    <p class='name'> Units:</p>
    <p class='name'><input value='$row[units]' type='text' name='u'  class='inputbox'></p>

    <p class='name'> Diseases:</p>
    <p class='name'><input value='$row[diseases]' type='text' name='d' class='inputbox'><br>

";

}

?>
<br>
<input type='submit' value='Update'  class='button'>










</form> 

</div>
</div>


<div class='footer'>
<p style="text-align:center;  font-size:15px;  padding-top:10px">Project by Prashant </p>
</div>



</body>
</html>





