<?php
session_start();
$conn=new mysqli("localhost","root","","sympo_round1");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        ?>

