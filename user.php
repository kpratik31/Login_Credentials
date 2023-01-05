<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "logincredentails";

    // connection
    $connection = mysqli_connect($servername, $username, $password, $db);
    if(!$connection){
        die("failed to connect".mysqli_connect_error());
    }
    
    else{
        echo "Records Successfully";
    }

    $name = $_POST['nm'];
    $email = $_POST['em'];
    //insertion
    $sql = "INSERT INTO `logindata`(`Name`,`Email`) VALUES('$name','$email')";

    mysqli_query($connection,$sql);

    //connection closed
    mysqli_close($connection);


?>




