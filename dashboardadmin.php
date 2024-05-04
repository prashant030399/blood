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
    margin-left:2.2%;
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

</style>





        </head>


<body>



    <div class='header1'>  <h3> Blood Bank Management System <span style="padding-left:140px; ">

   
 </span> </h3></div>
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
 
    <div class='box'><p style=" font-size:30px; color:red;" > A </p> <p >Blood Available</p><p >
     <?php
     $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select  sum(units) as count from donatedonor where bloodgroup='A' and status='Approved' ";
     $res=mysqli_query($con,$q);  
     while($row=mysqli_fetch_array($res)) 
     {
        $a=$row['count'];

    
     }
    
    $u=0;
    $q2=" select sum(units) as count from requestpatient where bloodgroups='A' and status='Approved'  ";
    $res2=mysqli_query($con,$q2);
    if($row=mysqli_fetch_array($res2))
    {
        $u=$row['count']; 
       
    }

    $a= $a-$u;
    if($a!=0)
    {
    echo" Total: $a Units ";
    }
    else 
    {
        echo" Total: 0 Unit ";
    }

     ?>

 </p></div>

    <div class='box'><p style=" font-size:30px; color:red;" > A+ </p> <p >Blood Available</p><p >
         <?php
     $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select  sum(units) as count from donatedonor where bloodgroup='A+' and status='Approved' ";
     $res=mysqli_query($con,$q); 
     if($row=mysqli_fetch_array($res))
     {
        $a=$row['count']; 
       
     }

     $u=0;
     $q2=" select sum(units) as count from requestpatient where bloodgroups='A+' and status='Approved'  ";
     $res2=mysqli_query($con,$q2);
     if($row=mysqli_fetch_array($res2))
     {
         $u=$row['count']; 
        
     }
 
     $a= $a-$u;
     echo" Total: $a Units ";

     ?>
     </p></div>


    <div class='box'><p style=" font-size:30px; color:red;" > A-</p> <p >Blood Available</p><p > 
        <?php
     $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select  sum(units) as count from donatedonor where bloodgroup='A-' and status='Approved' ";
     $res=mysqli_query($con,$q);
      while($row=mysqli_fetch_array($res))
      {
        $a=$row['count']; 
        
      
    }

$u=0;
$q2= " select sum(units) as count from requestpatient where bloodgroups='A-' and status='Approved'   ";
$res2= mysqli_query($con,$q2);
if($row=mysqli_fetch_array($res))
{
   $u= $row['count'];
}
$a=$a-$u;
if($a!=0)
echo" Total: $a Units ";
else 
{
    echo "Total: 0 Unit ";
}


     ?>



     </p></div>
    <div class='box'><p style=" font-size:30px; color:red;" > B </p> <p >Blood Available</p><p >
         <?php
     $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select  sum(units) as count from donatedonor where bloodgroup='B'and status='Approved' ";
     $res=mysqli_query($con,$q); 
     while($row=mysqli_fetch_array($res))
     {
        $a=$row['count']; 
     }

     $u=0;
$q2= " select sum(units) as count from requestpatient where bloodgroups='B' and status='Approved'   ";
$res2= mysqli_query($con,$q2);
if($row=mysqli_fetch_array($res))
{
   $u= $row['count'];
}
$a=$a-$u;
if($a!=0)
echo" Total: $a Units ";
else 
{
    echo "Total: 0 Unit ";
}







     ?>
     </p></div>
    <div class='box'><p style=" font-size:30px; color:red;" > B+ </p> <p >Blood Available</p><p >
         <?php
     $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select  sum(units) as count from donatedonor where bloodgroup='B+' and status='Approved' ";
     $res=mysqli_query($con,$q); 
     while($row=mysqli_fetch_array($res))
     {
        $a=$row['count'];
        

         }
         $u=0;
         $q2= " select sum(units) as count from requestpatient where bloodgroups='B+' and status='Approved'   ";
         $res2= mysqli_query($con,$q2);
         if($row=mysqli_fetch_array($res))
         {
            $u= $row['count'];
         }
         $a=$a-$u;
         if($a!=0)
         echo" Total: $a Units ";
         else 
         {
             echo "Total: 0 Unit ";
         }

     ?>
     </p></div>
    
    <div class='box'><p style=" font-size:30px; color:red;" > B- </p> <p >Blood Available</p><p >
        <?php
     $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select  sum(units) as count from donatedonor where bloodgroup='B-' and status='Approved' ";
     $res=mysqli_query($con,$q);
      while($row=mysqli_fetch_array($res))
      {
        $a=$row['count'];
       
         }

         $u=0;
         $q2= " select sum(units) as count from requestpatient where bloodgroups='B-' and status='Approved'   ";
         $res2= mysqli_query($con,$q2);
         if($row=mysqli_fetch_array($res))
         {
            $u= $row['count'];
         }
         $a=$a-$u;
         if($a!=0)
         echo" Total: $a Units ";
         else 
         {
             echo "Total: 0 Unit ";
         }


     ?>
     </p></div>
    <div class='box'><p style=" font-size:30px; color:red;" > AB+ </p> <p >Blood Available</p><p >
        <?php
     $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select  sum(units) as count from donatedonor where bloodgroup='AB+' and status='Approved' ";
     $res=mysqli_query($con,$q); 
     while($row=mysqli_fetch_array($res))
     {
        $a=$row['count'];
       
        }

        $u=0;
        $q2= " select sum(units) as count from requestpatient where bloodgroups='AB+' and status='Approved'   ";
        $res2= mysqli_query($con,$q2);
        if($row=mysqli_fetch_array($res))
        {
           $u= $row['count'];
        }
        $a=$a-$u;
        if($a!=0)
        echo" Total: $a Units ";
        else 
        {
            echo "Total: 0 Unit ";
        }





     ?>
     </p></div>
    <div class='box'><p style=" font-size:30px; color:red;" > AB- </p> <p >Blood Available</p><p >
        <?php
     $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select  sum(units) as count from donatedonor where bloodgroup='AB-' and status='Approved' ";
     $res=mysqli_query($con,$q);
      while($row=mysqli_fetch_array($res))
      {
        $a=$row['count'];
        
         }

         $u=0;
         $q2= " select sum(units) as count from requestpatient where bloodgroups='AB-' and status='Approved'   ";
         $res2= mysqli_query($con,$q2);
         if($row=mysqli_fetch_array($res))
         {
            $u= $row['count'];
         }
         $a=$a-$u;
         if($a!=0)
         echo" Total: $a Units ";
         else 
         {
             echo "Total: 0 Unit ";
         }


     ?>
     </p></div>

    <div class='box'><p style=" font-size:30px; color:red;" > O+ </p> <p >Blood Available</p><p>
        <?php
     $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select  sum(units) as count from donatedonor where bloodgroup='O+' and status='Approved' ";
     $res=mysqli_query($con,$q);
      while($row=mysqli_fetch_array($res))
      {
        $a=$row['count'];
        
          }
          $u=0;
          $q2= " select sum(units) as count from requestpatient where bloodgroups='O+' and status='Approved'   ";
          $res2= mysqli_query($con,$q2);
          if($row=mysqli_fetch_array($res))
          {
             $u= $row['count'];
          }
          $a=$a-$u;
          if($a!=0)
          echo" Total: $a Units ";
          else 
          {
              echo "Total: 0 Unit ";
          }



     ?>
     </p>
    </div>

    <div class='box'><p style=" font-size:30px; color:red;" > O- </p> <p >Blood Available</p><p >
        <?php
     $con=mysqli_connect('localhost','root','seedit','bloodmgmtproject');
     $q="select  sum(units) as count from donatedonor where bloodgroup='O-' and status='Approved' ";
     $res=mysqli_query($con,$q); 
     while($row=mysqli_fetch_array($res))
     {
        $a=$row['count']; 
      
         }
         $u=0;
         $q2= " select sum(units) as count from requestpatient where bloodgroups='O-' and status='Approved'   ";
         $res2= mysqli_query($con,$q2);
         if($row=mysqli_fetch_array($res))
         {
            $u= $row['count'];
         }
         $a=$a-$u;
         if($a!=0)
         echo" Total: $a Units ";
         else 
         {
             echo "Total: 0 Unit ";
         }



     ?>
     </p></div>





        


    





</div>
<<div class='footer'>
<p style="text-align:center;  font-size:15px;  padding-top:10px">Project by Prashant</p>
</div>








</body>

