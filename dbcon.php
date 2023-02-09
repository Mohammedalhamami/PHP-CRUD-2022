<?php
//i have erro in connection to db

//the problem is solved {hostname error the problem}
$con = mysqli_connect("localhost:4306", "root", "", "blog");
if (!$con) {
    die('Connection Faild' . mysqli_connect_error());
}
?>