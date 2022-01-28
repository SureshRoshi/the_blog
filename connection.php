<?php

$conn = mysqli_connect("localhost","sureshroshi","test1234","blog");

if(!$conn){
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}

?>