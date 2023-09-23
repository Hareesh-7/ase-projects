<?php
include('./connection.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$query = "select * from login where id= '" . $email . "' and password='" . $password . "'";
// var_dump($query);
$result = $conn->query($query);

if ($result->rowCount() > 0) {
    session_start();
    $row = $result->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $_SESSION['id'] = $row['id'];
        header('location:http://localhost/projects/eswariGroup/ase_projects/3/upload.php');
    }
} else {
    echo "
            <div style='margin: 50px 50px'>
                <font color='red'>
                    <p>no user found.</p>
                    <a href='http://localhost/projects/eswariGroup/ase_projects/3/'>Click here</a> for Our website.
                </font>
            </div>";

    // echo "
    //         <script>
    //             setTimeout(function() {
    //                 window.location.href = 'http://localhost/projects/eswariGroup/ase_projects/3/';
    //             }, 3000);
    //         </script>";
}
