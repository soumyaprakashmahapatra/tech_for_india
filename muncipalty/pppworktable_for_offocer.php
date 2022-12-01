<?php
include 'connection.php';
session_start();

// $id = $_SESSION['ppp_id'];

$sql="SELECT*FROM ppp_work_update,ppp_data WHERE ppp_work_update.ppp_id=ppp_data.ppp_id";

$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PPP WORK TABLE</title>
    <style>
       body{
        background-color:lightgray;
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
    <div class ="container">
    <div class="text-center">
        <h1>PPP WORK TABLE</h1>
      </div>
      <hr>
      <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Date</th>
                <th scope="col">Type</th>
                <th scope="col">Amount-Recycle</th>
                <th scope="col">Status</th>
                <th scope="col">Approval</th>        
            </tr>
        </thead>
        <tbody>
        <?php
               while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <th scope="row"><?php echo $row['name']; ?></th>
                <td><a type="button" href="../ppp_work_image/<?php echo $row['work_image']; ?>" class="btn btn-success">View</a></td>
                <th scope="row"><?php echo $row['date']; ?></th>
                <th scope="row"><?php echo $row['type']; ?></th>
                <th scope="row"><?php echo $row['amount_recycle']; ?></th>
                <th scope="row"><?php echo $row['status']; ?></th>
                <th scope="row"><div class="btn-group" role="group" aria-label="Basic example">
                    <a type="button" href="ppp_yes.php?id=<?php echo $row['work_id']; ?>" class="btn btn-success">Yes</a>
                    <a type="button" href="ppp_no.php?id=<?php echo $row['work_id']; ?>" class="btn btn-danger">No</a>
                  </div></th>
            </tr>
            <?php
               }
            ?>
               </tbody>
               </table>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script> 
</body>
</html>