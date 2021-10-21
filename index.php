<?php
$link = mysqli_connect("localhost","root","","user_info");
 if (isset($_POST['sumbit'])) 
 {
    
    $fname                   = $_POST['first_name'];
    $lname                   = $_POST['last_name'];
    $email                   = $_POST['email'];
    $gender                  = $_POST['gender'];
    $dob                     = $_POST['dOB'];
    $mobile                  = $_POST['mobile'];
    $designation             = $_POST['designation'];
    $hobbies                 = $_POST['hobby'];
    $hobby = implode(',', $hobbies);
    // echo $hobby;

    $query = "INSERT INTO `user_info`(`id`, `firstname`, `lastname`, `email`, `dob`, `mobile`, `designation`, `gender`, `hobbies`) VALUES ('NULL',' $fname','$lname','$email','$dob','$mobile','$designation','$gender','$hobby')";
    $result = mysqli_query($link, $query);
    if ($result) {
        header("Location: showing_user_info.php");
        echo '<div class="text-success"><b>Your record successfully Added</b></div>';
       }
        else {
       echo '<div class="text-success"><b>Your record not Added!</b></div>';
        }
 }

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP-Machine Test</title>
</head>

<body>
    <div class="container">
        <h1>Machine Test</h1>
        <form action="index.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" required>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="DOB" class="form-label">Date of Birth</label><br>
                    <input type="date" id="dOB" class="form-control" name="dOB" required>
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Telephone/Mobile</label>
                    <input type="text" name="mobile" pattern="[1-9]{1}[0-9]{9}" class="form-control"
                     title="Phone number with 1-9 and remaing 9 digit with 0-9" required>
                </div>
                <div class="mb-3">
                    <label for="designation" class="form-label">Designation</label>
                    <input type="text" class="form-control" id="designation" name="designation" required>
                </div>
                <div class="mb-3">
                    <label for="hobbies" class="form-label">Hobbies</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="dancing" name="hobby[]" value="Dancing">
                        <label class="form-check-label" for="dancing">Dancing</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="drawing" name="hobby[]" value="Drawing">
                        <label class="form-check-label" for="drawing">Drawing</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="chess" name="hobby[]" value="Chess">
                        <label class="form-check-label" for="chess">Chess</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="books" name="hobby[]" value="Books">
                        <label class="form-check-label" for="books">Reading Books</label>
                    </div>
                </div>
            </div>

        </div>
        <div class="float-right">
            <button type="sumbit" name="sumbit" value="sumbit" class="btn btn-info">Sumbit</button>
        </div>

        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

