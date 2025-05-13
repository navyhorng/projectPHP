<?php
if(isset($_GET['id'])){
    include("connect.php");
    $id = $_GET['id'];
    $sql = "UPDATE books SET is_active = 0 WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["delete"] = "Book Deleted.";
        header("Location:index.php");
    }
    else{
        die("Something went wrong");
    }
    
}
else{
    echo "Book does not exist";
}