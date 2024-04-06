<?php
    $con = mysqli_connect("localhost","root");

    if($con){
        echo "Connection Successful";
    }
    else{
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'henna');

    $Name = $_POST['Name'];
    $Mobile = $_POST['Email'];
    $Email = $_POST['Number'];

    $query = "INSERT INTO users (Name, Mobile, Email) VALUES ('$Name', '$Mobile', '$Email')";

    mysqli_query($con, $query);
    header('location:index.php');
    
?>
