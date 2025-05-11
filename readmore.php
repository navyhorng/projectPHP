<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Book Details</title>
    <style>
        .book-details{
            background-color:#f5f5f5;
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Book Details</h1>    
        </header>
        <div class="book-details p-5 my-4">
            <?php
            include("connect.php");
            $id = $_GET['id'];
            if($id){
                $sql = "SELECT * FROM books WHERE id =$id";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                 ?>
                    <h3>Title:</h3>
                    <p><?php echo $row["title"]; ?></p>
                    <h3>Description:</h3>
                    <p><?php echo $row["description"]; ?></p>
                    <h3>Author:</h3>
                    <p><?php echo $row["author"]; ?></p>
                    <h3>Type:</h3>
                    <p><?php echo $row["type"]; ?></p>

                    <?php
                }
            }
            else{
                echo "<h3>Books not found.</h3>";
            }
            ?>
        </div>
        <footer class="d-flex justify-content-between my-4">
            <div class="div"></div>
            <div>
                <a href="index.php" class="btn border-dark">Back</a>
            </div>
        </footer>
    </div>
</body>
</html>