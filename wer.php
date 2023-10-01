<?php 
    $conn = mysqli_connect('localhost', 'u2264446_test1', 'uT5mI1tB4mkO1uA7', 'u2264446_test');
    $update = "UPDATE users SET name = '{$_GET["name"]}', numder = '{$_GET["numder"]}', firstname = '{$_GET["firstname"]}', rang = '{$_GET["rang"]}' WHERE id = {$_GET["id"]}";
    $results = mysqli_query($conn, $update);
    header("Location: regg.php");
    exit;
?>