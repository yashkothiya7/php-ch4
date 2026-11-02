<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "");

if (!$conn)
{
    die("Connection Failed");
}

// Create database
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS studentdb");

// Select database
mysqli_select_db($conn, "studentdb");

// Create table
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS student
(
    stuId INT PRIMARY KEY,
    stu_name VARCHAR(50),
    mob VARCHAR(15),
    country VARCHAR(30)
)");

// AJAX request
if (isset($_GET["mob"]))
{
    $id = $_GET["id"];
    $name = $_GET["name"];
    $mob = $_GET["mob"];
    $country = $_GET["country"];

    // Check mobile number
    $sql = "SELECT * FROM student WHERE mob = '$mob'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        echo "Mobile Number Already registered. Try another Mobile Number";
    }
    else
    {
        // Insert new student
        $sql = "INSERT INTO student
                VALUES ('$id', '$name', '$mob', '$country')";

        if (mysqli_query($conn, $sql))
        {
            echo "Student data added successfully";
        }
        else
        {
            echo "Error: " . mysqli_error($conn);
        }
    }

    exit();
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Student Registration</title>

<script>

function checkMobile()
{var id = document.getElementById("id").value;
var name = document.getElementById("name").value;
var mob = document.getElementById("mob").value;
var country = document.getElementById("country").value;

fetch("13.php?id=" + id +
      "&name=" + name +
      "&mob=" + mob +
      "&country=" +country)

.then(response => response.text())

.then(data => {
    document.getElementById("result").innerHTML = data;
})

.catch(error => {
    document.getElementById("result").innerHTML = "Error!";
});
}

</script>

</head>

<body>

<h2>Student Registration</h2>

<form>

    Student ID:
    <input type="text" id="id">
    <br><br>

    Student Name:
    <input type="text" id="name">
    <br><br>

    Mobile Number:
    <input type="text" id="mob">
    <br><br>

    Country:
    <input type="text" id="country">
    <br><br>

    <input type="button"
           value="Register"
           onclick="checkMobile()">

</form>

<p id="result"></p>

</body>
</html>