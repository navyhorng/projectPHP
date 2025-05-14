<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap @5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>List of Books</title>
    <style>
        body {
            color: #3a2d3d;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            margin: auto;
            max-width: 1200px;
        }

        .table-container {
            background-color: #fff6f0;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            overflow-x: auto;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
            white-space: normal;
            word-wrap: break-word;
        }

        .table th {
            background-color: rgb(111, 116, 123);
            color: white;
        }

        .table {
            font-size: 18px;
        }

        .btn-group .btn {
            margin: 5px;
        }

        a {
            text-decoration: none;
            font-size: 18px;
        }

        header {
            margin-bottom: 20px;
            flex-direction: column;
            text-align: center;
        }

        .alert {
            color: green;
        }

        /* ===== Media Queries ===== */

        /* Desktop: width ≥ 1024px */
        @media (min-width: 1024px) {
            header {
                flex-direction: row;
                text-align: left;
            }

            .table {
                font-size: 20px;
            }

            .table th,
            .table td {
                min-width: 150px;
            }
        }

        /* Tablet: 768px–1023px */
        @media (min-width: 768px) and (max-width: 1023px) {
            .table {
                font-size: 16px;
            }

            .table-container {
                padding: 20px;
            }

            .btn-group .btn {
                font-size: 14px;
            }
        }

        /* Mobile: width ≤ 767px */
        @media (max-width: 767px) {
            .table {
                font-size: 14px;
            }

            .table th,
            .table td {
                min-width: 100px;
            }

            .btn-group {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .btn-group .btn {
                width: 100%;
                font-size: 14px;
                margin-bottom: 5px;
            }

            header h1 {
                font-size: 20px;
            }

            a.btn {
                font-size: 14px;
            }
        }
    </style>

</head>

<body>


    <div class="containerp-5">
        <header class="d-flex flex-wrap justify-content-between align-items-center mt-4">
            <h1 class="h3">Book List</h1>
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
                echo "<div id='alert-{$key}' class='alert alert-success alert-dismissible fade show' role='alert'>
                    " . htmlspecialchars($msg) . "
                </div>
                <script>
                    setTimeout(function() {
                        var alertBox = document.getElementById('alert-{$key}');
                        if (alertBox) {
                            alertBox.remove();
                        }
                    }, 2000);
                </script>";
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
                        $sql = "SELECT * FROM books WHERE is_active=1";
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap @5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>