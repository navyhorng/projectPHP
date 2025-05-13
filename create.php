<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New Book</title> 
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
            <h1>Add new Book</h1> 
        </header>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="Book title">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" placeholder="Author Name">
            </div>
            <div class="form-element my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select Book Type:</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Crime">Crime</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Book Description:"></textarea>
            </div>
            <div class="form-element  d-flex justify-content-between my-4">
            <input type="submit" name="create" value="Add Book" class="add">
                <div>
                <a href="./viewingTable.php" class="btn border-dark">Cancel</a>
            </div>
            </div>
        </form>
    </div>
</body>
</html>