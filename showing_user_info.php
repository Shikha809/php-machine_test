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
        <h1>Showing User Information</h1>
        <form action="index.php" method="post">
        <div class="card">
                                    <div class="card-body">

                                        <div class="table table-responsive table-invoice">
                                            <table id="MyTable" class="table-striped table-bordered table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Sr. no.</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Date of Birth</th>
                                                    <th>Mobile Number</th>
                                                    <th>Designation</th>
                                                    <th>Gender</th>
                                                    <th> Hobbies</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $link = mysqli_connect("localhost","root","","user_info");
                                                $query = "SELECT * FROM `user_info` ORDER BY  id DESC";
                                                $result = mysqli_query($link, $query);
                                                $rowNum = mysqli_num_rows($result);
                                                if ($rowNum > 0) {
                                                    $i = 1;
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                        <tr>
                                                            <td class="p-0 text-center"><?php echo $i; ?></td>
                                                            <td><?php echo $row['firstname']; ?></td>
                                                            <td><?php echo $row['lastname']; ?></td>
                                                            <td><?php echo $row['email']; ?></td>
                                                            <td><?php echo $row['dob']; ?></td>
                                                            <td><?php echo $row['mobile']; ?></td>
                                                            <td><?php echo $row['designation']; ?></td>
                                                            <td><?php echo $row['gender']; ?></td>
                                                            <td><?php echo $row['hobbies']; ?></td>
                                                        </tr>
                                                        <?php
                                                        $i++;
                                                    }
                                                } else {
                                                    echo '<tr><td colspan="8" class="p-0 text-center">No Record</td></tr>';
                                                }
                                                ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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

