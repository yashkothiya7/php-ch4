<?php

$username = $_GET["username"];

if($username == "")
{
    echo "Username cannot be blank";
}
else if(strlen($username) < 7)
{
    echo "Username must be at least 7 characters";
}
else if(strlen($username) > 12)
{
    echo "Username must be maximum 12 characters";
}
else
{
    echo "Valid Username";
}

?>