<?php
include('connect.php');

//id geting from the url
// if (isset($_GET['updateId'])) {
//     header('location: index.php');
// }
$id =$_GET['updateId'];


//echo $id;
$sql = "SELECT * FROM seriescurd WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
// echo $row['fname'];
///show whatever the data  come from the database
$f_name = $row['fname'];
$l_name = $row['lname'];
$email = $row['email'];
$mobile = $row['mobile'];

//show updated data
if (isset($_POST['update'])) {
    $f_name = $_POST['f_name'];  // name from the form
    $l_name = $_POST['l_name'];  // Corrected name
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $sql = "UPDATE `seriescurd` SET   `fname`='$f_name',`lname`='$l_name',`email`='$email',
    `mobile`='$mobile' WHERE id='$id'";

    $update_result = mysqli_query($conn, $sql);
    if ($update_result) {
        header("Location:read.php");
    } else {
        die(mysqli_error($conn));
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form  method="POST">
            <div class="form-group mb-3">
                <label>First name</label>
                <input type="text" class="form-control" name="f_name" autocomplete="off" value="<?php echo $f_name ?>">
            </div>
            <div class="form-group mb-3">
                <label>Last name</label>
                <input type="text" class="form-control" name="l_name" autocomplete="off" value="<?php echo $l_name ?>">
            </div>
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" autocomplete="off" value="<?php echo $email ?>">
            </div>
            <div class="form-group mb-3">
                <label>mobile</label>
                <input type="text" class="form-control" name="mobile" autocomplete="off"value="<?php echo $mobile ?>">
            </div> 
            <button type="submit" class="btn btn-dark btn-lg" name="update">update</button>
        </form>
    </div>
</body>

</html>