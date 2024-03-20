<?php
$conn = mysqli_connect("db:3306", "db", "db", "db");

// check if there's no connection and give an error if so
if (mysqli_connect_errno()) {
    echo "Connection error: " . mysqli_connect_error();
}
