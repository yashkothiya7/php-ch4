<?php

$str=$_GET['str'];

if($str=="")
    {
        echo "filed cannot blank!";
    }
    elseif (strlen($str)<5) {
        echo " String must 5!";
    }
    else {
        echo "vaildate string!";
    }
    ?>