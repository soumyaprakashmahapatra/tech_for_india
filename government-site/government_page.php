<?php
include 'connection.php';

// $sql = "SELECT count(*) as 'total1' FROM public_work";
// $result1 = mysqli_query($conn,$sql);
// // $data1=mysql_fetch_assoc($result1);
// $t1 = $result1['total1'];

// echo $t1;

$sql1="select count(*) as total from public_work";
$result1=mysqli_query($conn,$sql1);
$data1=mysqli_fetch_assoc($result1);
$t1=$data1['total'];

$sql2="select count(*) as total from health_care_work";
$result2=mysqli_query($conn,$sql2);
$data2=mysqli_fetch_assoc($result2);
$t2=$data2['total'];

$sql3="select count(*) as total from public_complaint";
$result3=mysqli_query($conn,$sql3);
$data3=mysqli_fetch_assoc($result3);
$t3=$data3['total'];

$sql4="select count(*) as total from ppp_work_update";
$result4=mysqli_query($conn,$sql4);
$data4=mysqli_fetch_assoc($result4);
$t4=$data4['total'];

$total = $t1+$t2+$t3+$t4;

// echo $total

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
        .hello{
            margin-right:30px;
        }
        body {
    background-color:lightgray;
  
}
.hello{
    margin: 0;
    padding:0;
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
        <h1>GOVERNMENT PAGE</h1><hr>
    </div>
    <div> <a type="button" href="log_out.php" class="btn btn-danger hello">Logout</a>
    </div><br>
    <div></div> <span><h1>Total Work : <?php echo $total?></h1></span><br>
    <span><h1>Pending Work : 6</h1></span><br>
    <span><h1>Completed Work : 7</h1></span></div>

    <canvas id="myChartBar" style="width: 55%; max-width: 800px;"></canvas>


    <script>
        var xValues = ["Total Work", "Completed Work", "Pending Work"];
        var yValues = [<?php echo $total?>, 7, 6];
        var barColors = [
            "#b91d47",
            "#008000",
            "#FF0000"

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
    
    <div class="d-grid gap-3">
        <div class="p-2 bg-light border"><a type="button" href="../muncipalty/public_Work_page.php" class="btn btn-warning">Public Garbage Request</a>
            <a type="button" href="../muncipalty/pppworktable_for_offocer.php" class="btn btn-warning">Private</a>
            <a type="button" href="../muncipalty/health_care_data_for_officer.php" class="btn btn-warning">Health Care</a>
            <br>  </div>
              
                <!-- <div class="p-2 bg-light border"><a type="button" class="btn btn-warning">Officer</a>
                    <a type="button" class="btn btn-warning">Employee</a> -->
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a type="button" class="btn btn-success">Suggest</a>
                        <a type="button" href="publiccomplaint.php" class="btn btn-danger ">complaint</a>
                    </div>
                </div>

                </div>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                    crossorigin="anonymous"></script>
</body>

</html>