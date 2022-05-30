<?php 

$conn= new mysqli("localhost","root","","doctors_appointment_db","3308");
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}