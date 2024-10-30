<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $dob = date('Ymd', strtotime($_POST['dob']));
    $department = $_POST['department'];
    

    $sql = "INSERT INTO employee (name, email, address, salary, dob, department) VALUES ('$name', '$email', '$address', $salary, '$dob', '$department')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}