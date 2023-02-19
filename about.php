<?php
    $con = mysqli_connect('localhost', 'root');

    if ($con) {
        echo "Connection Successful";
    } else {
        echo "No Connection";
    }

    mysqli_select_db($con, 'photography');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $query = "insert into users (name, email, number) values ('$name', '$email', '$number')";

    mysqli_query($con, $query);
    header('location:index.php');

?>


<!-- $sql = mysql_query("SELECT * FROM login WHERE username = '".$_POST['username']."' and password = '".md5($_POST['password'])."'");
$row = mysql_num_rows($sql);

$sql = mysqli_query($success, "SELECT * FROM login WHERE username = '".$_POST['username']."' and password = '".md5($_POST['password'])."'");
$row = mysqli_num_rows($sql); -->