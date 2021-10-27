<?php

    $con = mysqli_connect('localhost', 'root');

    if($con){
        echo "Connection Successful";
    }else{
        echo "Connection failed";
    }
    mysqli_select_db($con, 'bookshop');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO users ( name, email, contact) 
    VALUES('$name' , '$email', '$contact')";

    // mysqli_query($con, $query);
    

    mysqli_query($con, $query);
    echo "$query";
    header('location:index.php');

?>