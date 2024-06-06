<?php
include('connect.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
     
    <a href="index.php"><button>create new member</button> </a>

       <br><br>
       <h3>student details </h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial no</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM seriescurd ";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $f_name = $row['fname'];
                    $l_name = $row['lname'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    echo ' 
                           <th scope="row">'.$id.'</th>
                           <td>'.$f_name.'</td>
                           <td>'.$l_name.'</td>
                          <td>'.$email.'</td>
                          <td>'.$mobile.'</td>
                          <td>
                          <a href="update.php?updateId='.$id.'" class="btn btn-dark">update</a>
                           <a href="delete.php?deleteId='.$id.'" class="btn btn-danger">delete</a>
                         </td>
                         </tr>';
                }
                ?>


            </tbody>
        </table>

    </div>
</body>

</html>