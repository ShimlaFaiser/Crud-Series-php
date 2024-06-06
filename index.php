<?php
include('connect.php');


if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Assuming $conn is your database connection
    $sql = "INSERT INTO seriescurd (fname, lname, email, mobile)
            VALUES ('$f_name', '$l_name', '$email', '$mobile')";

    if (mysqli_query($conn, $sql)) {
       header('location:read.php');
    } else {
        echo "Insertion Failed: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CURD Series</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method ="POST">
        <div class="mb-3">
            <label  class="form-label">First name</label>
            <input type="text" class="form-control" placeholder="enter your name" name="f_name" autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">Last name</label>
            <input type="text" class="form-control"  placeholder="enter your name" name="l_name" autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control"  placeholder="enter your email" name="email" autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">mobile</label>
            <input type="text" class="form-control" placeholder="enter your mobile number" name="mobile" autocomplete="off">
        </div>
        <button class="btn btn-dark btn-lg my-3" name="submit">Submit</button>

        </form>
    </div>

</body>

</html>