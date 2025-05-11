<?php
include('connect.php');
if(isset($_POST["create"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $sql = "INSERT INTO books(title , author , type , description) VALUES ('$title', '$author', '$type', '$description')";
    if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["crate"] = "Book Added Successsfully";
        header("Location:index.php");
    }
    else{
        die("Somthing went wrong");
    }
}
if(isset($_POST["edit"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "UPDATE books SET title = '$title', type='$type', author='$author', description='$description' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["update"] = "Book Update Successfully";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}