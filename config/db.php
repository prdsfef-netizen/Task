<?php

session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'notes-db'
);

if(isset($conn))
{
   // echo "DB is connected";
}
else
{
    echo "DB is no connected";
}
?>