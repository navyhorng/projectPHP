<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Book</title>
    <style>
        body{
            background-color: black;
            color: #3a2d3d;
        }
        .create{
            margin-top: 8rem;
            width: 900px;
            height: auto;
            background-color: #fff6f0 ;
            padding: 20px;
            border-radius: 20px;
        }
        
        .add {
            transition: all 0.3s ease;
            border-radius: 5px;
        }

        .add:hover {
            color: #fff6f0;
            background-color:#3a2d3d !important;
            transform: scale(1.09);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .btn{
            color: #fff6f0;
            background-color:#FF0B50 !important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container create">
    <header class="d-flex justify-content-between my-4">
                <h1>Edit Book</h1>
                
        </header>

        <form action="process.php" method="post">
            <?php

            if(isset($_GET['id'])){
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM books WHERE id=$id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <div class="form-element my-4">
                    <input type="text" class="form-control" name="title" placeholder="Book Title" value="<?php echo $row["title"]; ?>">
                </div>
                <div class="form-element my-4">
                    <input type="text" class="form-control" name="author" placeholder="Author Name" value="<?php echo $row["author"]; ?>">
                </div>
                <div class="form-element my-4">
                    <select name="type" id="" class="form-control">
                        <option value="">Select Book Type</option>
                        <option value="Adventure" <?php if($row["type"]=="Adventure"){echo "selected";} ?>>Adventure</option>
                        <option value="Crime" <?php if($row["type"]=="Crime"){echo "selected";} ?>>Crime</option>
                        <option value="Fantasy" <?php if($row["type"]=="Fantasy"){echo "selected";} ?>>Fantasy</option>
                        <option value="Horror" <?php if($row["type"]=="Horror"){echo "selected";} ?>>Horror</option>
                    </select>
                </div>
                <div class="form-element my-4">
                    <textarea class="form-control" name="description" placeholder="Book Description"><?php echo $row["description"]; ?></textarea>
                </div>
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <div class="form-element d-flex justify-content-between my-4">
                    <input type="submit" name="edit" value="Edit Book" class="add">
                    <div>
                        <a href="./viewingTable.php" class="btn border-dark">Back</a>
                    </div>
                </div>
                <?php
            }else{
                echo "<h3>Book Does not Exist.</h3>";
            }
            ?>
        </form>
        
    </div>
</body>
</html>