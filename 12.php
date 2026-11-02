<?php

// 1. Connect with MySQL
$conn = mysqli_connect("localhost", "root", "");

if(!$conn)
{
    die("Connection Failed");
}

// 2. Create Database
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS college");

// 3. Select Database
mysqli_select_db($conn, "college");

// 4. Create Table
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS Student
(
    Stud_id INT PRIMARY KEY,
    Stu_Name VARCHAR(50),
    MobileNo VARCHAR(15),
    Country VARCHAR(30)
)");

// 5. Insert Data
mysqli_query($conn, "INSERT IGNORE INTO Student
(Stud_id, Stu_Name, MobileNo, Country)
VALUES
(101, 'Parth', '9876543210', 'India'),
(102, 'Rahul', '9876543211', 'India'),
(103, 'Amit', '9876543212', 'India')");

// 6. AJAX Request
if(isset($_GET["id"]))
{
    $id = $_GET["id"];

    $sql = "SELECT * FROM Student WHERE Stud_id = '$id'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        echo "Student ID already exists....";
    }
    else
    {
        echo "Student ID does not exist";
    }

    exit();
}

?>