<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management Project</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color:black;
            color: #ffffff;
        }
        .card {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 3s ease-out forwards;
            margin-top: 8rem;
            padding: 3rem;
            background-color: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        @keyframes fadeInUp {
            to {
                opacity: 2;
                transform: translateY(0);
            }
        }
        .card-body{
            margin-top: 1rem;
        }
        .card-text{
            font-size: 22px;
        }
        .project-btn {
            transition: all 0.3s ease;
            color:  #ffffff;
        }

        .project-btn:hover {
            color:rgb(245, 240, 240);
            background-color:#3a2d3d !important;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
    
</head>
<body>

    <div class="about container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Book Management System Project</h2>
                        <p class="card-text">
                            The Book Management System is a simple web-based application developed using PHP, MySQL, and Bootstrap. 
                            The main goal of the project is to provide basic CRUD functionality, allowing users to create, view, update, 
                            and delete book records in a structured and user-friendly interface. Each book record includes important details 
                            such as the title, author, category, and publication year. By using a MySQL database, the system ensures that 
                            all data is stored efficiently and can be retrieved quickly when needed.
                            <br><br>
                            In conclusion, this project provides a practical example of implementing core CRUD operations in a real-world scenario. 
                            It demonstrates how web technologies can be combined to build a functional and responsive system that can be further 
                            enhanced in the future with additional features such as search, login, and reporting tools.
                        </p>
                    </div>
                </div>
                <a href="./viewingTable.php" class="btn border-dark btn-lg mt-5 project-btn" data-aos="fade-up" data-aos-delay="500">
                    Let's go to the project
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
