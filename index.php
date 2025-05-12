<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap @5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>List of Books</title>
    <style>
        body {
            background-color: #f8f9fa;
            align-items: center;
            justify-content: center;
            display: flex;
            
        }

        .table-container {
            border: black;
            background-color: white;
            border-radius: 10px;
            padding: 50px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
            min-width: 150px;
            white-space: normal;
        }

        .table th {
            background-color:rgb(111, 116, 123);
            color: white;
        }

        .table td:nth-child(2),
        .table td:nth-child(3) {
            min-width: auto;
        }

        .table {
            font-size: 20px;
        }

        .btn-group .btn {
            margin: 5px;
        }
        a{
            text-decoration: none;
            font-size: 20px
            
        }
        header{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <header class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <h1 class="h3">📚 Book List</h1>
        <div>
            <a href="create.php" class="btn btn-danger my-5">➕ Add New Book</a>
        </div>
    </header>

    <!-- Session Messages -->
    <?php
    session_start();
    $messages = [
        'create' => 'Book added successfully!',
        'update' => 'Book updated successfully!',
        'delete' => 'Book deleted successfully!'
    ];

    foreach ($messages as $key => $msg) {
        if (isset($_SESSION[$key])) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    $msg
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                  </div>";
            unset($_SESSION[$key]);
        }
    }
    ?>

    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle fs-5">
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
                    $result = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?= htmlspecialchars($data['id']) ?></td>
                            <td><?= htmlspecialchars($data['title']) ?></td>
                            <td><?= htmlspecialchars($data['author']) ?></td>
                            <td><?= htmlspecialchars($data['type']) ?></td>
                            <td class="btn-group">
                                <a href="readmore.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-info text-white">📖</a>
                                <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-warning">✏️</a>
                                <a href="delete.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">🗑️</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap @5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>