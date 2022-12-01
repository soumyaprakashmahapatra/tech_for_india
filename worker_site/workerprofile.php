<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
        body {
    background-color: lightgray;
}


.grid{
    padding: 7% 15%;
    text-align: center;
  
}
        </style>
</head>
<body>
<div class="container-fluid hello">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0 p-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="../logo1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                GARBAGE MANAGEMENT
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active a1" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1" href="../About2.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1" href="../contactForm.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1" href="../disposal.html">Our Mission</a>
                    </li>
            </ul>
          </div>
        </div>
    </nav>
</div>
    <div class="container">
        <div class="text-center">
           <h1>WORKER PROFILE</h1><hr>
         </div>
        
         <div> <a type="button" href="logout.php" class="btn btn-danger">Logout</a>
         </div><br>
         <div class="row">
           <div class="col-md-4" style="height:200px;width:150px;border:2px solid black;float:right;"><img src="../profile-image/<?php echo $_SESSION['wor_dp'];?>" alt="" srcset="" height="100%" width="100%"></div>
           
          <div class="col-md-4"> <p>Name:<span><?php echo $_SESSION['worker_name']; ?></span></p>
            <p>Phone:<span><?php echo $_SESSION['wor_phone']; ?></span></p>
           <p>Gender:<span><?php echo $_SESSION['wor_gender']; ?></span></p>
           <p>DOB:<span><?php echo $_SESSION['worker_name']; ?></span></p>
           <p>Department:<span><?php echo $_SESSION['wor_dept']; ?></span></p>
           <p></p></div>
           <div class="container col-md-4" style="float:right;">
               <div> <a type="button" href="employee_page_table.php" class="btn btn-danger ">Upload STATUS OF ASSIGNED WORK</a>
               <canvas id="myChartBar" style="width: 55%; max-width: 800px;"></canvas>
   
               <div class="container spacing">
                   <script>
                       var xValues = ["Total Work", "Pending", "Completed"];
                       var yValues = [45, 56, 28];
                       var barColors = [
                           "#b91d47",
                           "#FF0000",
                           "#008000"
                       ];
                       new Chart("myChartBar", {
                           type: "bar",
                           data: {
                               labels: xValues,
                               datasets: [{
                                   backgroundColor: barColors,
                                   data: yValues
                               }]
                           },
                           options: {
                               legend: { display: false },
                               title: {
                                   display: true,
                                   text: "Daily reports"
                               }
                           }
                       });
       
                   </script>
               </div>
             </div> 
         
       </div>
       </div>
       <div> <a href="employee_page_table.php" type="button" class="btn btn-danger ">View All ASSIGNED Work</a>  
    </div>
   <br>
   <hr>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script> 
</body>
</html>