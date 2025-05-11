<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>List of Book</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        
        }
        
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
                <h1>Book List</h1>
                <div>
                    <a href="create.php" class="btn btn-primary">Add New Book</a>
                </div>
        </header>
        
        <?php
        session_start();
        if(isset($_SESSION["create"])){
        ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["create"];
                ?>
            </div>
            <?php
            unset($_SESSION["create"]);
        }?>

        <?php
        if(isset($_SESSION["update"])){
        ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["update"];
                ?>
            </div>
            <?php
            unset($_SESSION["update"]);
        }?>

        <?php
        if(isset($_SESSION["delete"])){
        ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["delete"];
                ?>
            </div>
            <?php
            unset($_SESSION["delete"]);
        }?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <?php
            include('connect.php');
            $sql = "SELECT * FROM books";
            $result = mysqli_query($conn,$sql);
            while($data = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['author']; ?></td>
                    <td><?php echo $data['type']; ?></td>
                    <td>
                        <a href="readmore.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read More</a>
                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>    
    </div>
    
</body>
</html>