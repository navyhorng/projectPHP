<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New Book</title> 
    <style>
        .create{
            width: 900px;
            height: auto;
            background-color:#f5f5f5;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container my-5 create">
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
                <input type="submit" name="create" value="Add Book" class="btn btn-primary">
                <div>
                <a href="index.php" class="btn border-dark">Cancel</a>
            </div>
            </div>
        </form>
    </div>
</body>
</html>