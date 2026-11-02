<?php

$id = $_GET["id"];

if($id == 1)
{
    echo "ID: 1<br>";
    echo "Name: Parth<br>";
    echo "City: Ahmedabad";
}
else if($id == 2)
{
    echo "ID: 2<br>";
    echo "Name: Rahul<br>";
    echo "City: Surat";
}
else if($id == 3)
{
    echo "ID: 3<br>";
    echo "Name: Amit<br>";
    echo "City: Vadodara";
}
else
{
    echo "Please select a user";
}

?>

<!-- <?php

$conn = mysqli_connect("localhost", "root", "");

if (!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, 'MY-DB');

$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE sid_ = $id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "ID: " . $row['sid_'] . "<br>";
        echo "Student: " . $row['sname'] . "<br>";
        echo "Course ID: " . $row['cid'] . "<br>";
        echo "Mobile No: " . $row['mno'] . "<br>";
    }
}
else
{
    echo "Data Not Found!";
}

mysqli_close($conn);

?> -->
