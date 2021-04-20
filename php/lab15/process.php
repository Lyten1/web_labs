<?php

$id= 0;
$num = 0;
$surname = '';
$count = 0;
$update = false;

$mysqli = new mysqli('localhost', 'root', 'root', 'web_lab') or die(mysqli_error($mysqli));

if(isset($_POST['save'])) {
    $num = $_POST['number'];
    $surname = $_POST['surname'];
    $count = $_POST['count'];

    $mysqli->query("INSERT INTO lab15 (number, surname, count) VALUES('$num', '$surname', '$count')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "succcess"; 

    header('location: index.php');
}

if(isset($_GET['delete'])) {
    $id= $_GET['delete'];

    $mysqli->query("DELETE FROM lab15 WHERE id = $id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger"; 
    
    header('location: index.php');
} 

if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;

    $result = $mysqli->query("SELECT * FROM lab15 WHERE id = $id") or die($mysqli->error);

    if($result == 1) {
        $row = $result->fetch_array();
        $num = $row['number'];
        $surname = $row['surname'];
        $count = $row['count'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $num = $_POST['number'];
    $surname = $_POST['surname'];
    $count = $_POST['count'];


    $mysqli->query("UPDATE lab15 SET number='$num', surname = '$surname', count='$count' WHERE id = $id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] =  "warning";

    header('location: index.php');
}


?>