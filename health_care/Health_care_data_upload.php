<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<style>
     body {
   background-image:url('../69.jpg');
  
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
            <h1>Health Care</h1>
        </div>
        <hr>
        <div> <a href="h_logout.php" type="button" class="btn btn-danger">Logout</a>
        </div><br>
        <div class="float-md-right">
            <h1>Total Work : 0</h1>
            <h1>Approved Work : 0</h1>
            <h1>Not Approved Work : 0</h1>
            <div class="col-12">
                <button class="btn btn-success" type="submit">View All Work Status</button>
            </div>
        </div>
        <canvas id="myChartBar" style="width: 55%; max-width: 800px;"></canvas>

        <div class="container spacing">
            <script>
                var xValues = ["Total Work", "Approved Work", "Not Approved Work"];
                var yValues = [45, 56, 28];
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
        </div>

        <div class="container">
            <div class="text-center">
                <h1>Daily data upload </h1>
            </div>

        <form class="row g-3 needs-validation" action="health_care_work_check.php"       enctype="multipart/form-data" method="POST">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Area assigned to employee</label>
                <input type="text" class="form-control" id="validationCustom01" name="address" required>
               
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">city</label>
                <input type="text" class="form-control" id="validationCustom02" name="city" required>
                
            </div>
            <br>
            
           

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Work Type</label>
                    <select class="form-select" id="validationCustom04" name="type" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="type-1">door to door visit and awarness </option>
                        <option value="type-2">door to door dustbin survey </option>
                        <option value="type-3"> govt. medicine and necessaries distribution </option>
                        <option value="type-4"> other govt. service </option>
                    </select>
                    <div class="col-md-6">
            <div class="form-group">
                <label>today's work image upload: <label>
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
                <br>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

            </div>

            
            
           
            
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="desc"></textarea>
                <label for="floatingTextarea2">Description</label>
              </div>

            <div class="col-12">
                <button class="btn btn-success" type="submit" name="upload">Submit form</button>
            </div>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>