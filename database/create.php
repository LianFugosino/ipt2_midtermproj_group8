<?php
session_start();
include('database.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname']; 
    $course = $_POST['course']; 
    $year = $_POST['year']; 
    $block = $_POST['block']; 
    $status = $_POST['status']; 

    $sql = "INSERT INTO students (firstname, lastname, course, year, block, status) VALUES ('$firstname', '$lastname', '$course', '$year', '$block','$status')"; 

    if (mysqli_query($conn, $sql)) { 
        $_SESSION['status'] = "created"; 
    } else { 
        $_SESSION['status'] = "error"; 
    }

    mysqli_close($conn); 
    header("Location: ../index.php"); 
    exit(); 
}
?>
