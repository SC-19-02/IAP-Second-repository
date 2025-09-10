<?php
class Template {
    public function documentStart($conf) {
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title><?php echo $conf['site_name']; ?></title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
            <style>
                .jumbotron {
                    background: linear-gradient(135deg, #6f42c1, #e83e8c);
                    color: white;
                }
                .navbar-custom {
                    background-color: #343a40;
                }
                footer {
                    background-color: #f8f9fa;
                    padding: 1rem 0;
                    text-align: center;
                    margin-top: 2rem;
                    border-top: 1px solid #dee2e6;
                }
            </style>
        </head>
        <body>
        <?php
    }

    public function navArea($conf) {
        ?>
        <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
            <a class="navbar-brand" href="#"><?php echo $conf['site_name']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
        <?php
    }

    public function hero() {
        $currentDay = date('l'); 
        $currentDate = date('F j, Y'); 
        ?>
        <main role="main" class="mt-5 pt-5">
            <div class="jumbotron text-center">
                <div class="container">
                    <h1 class="display-3 font-weight-bold">Welcome to StudyHub!</h1>
                    <p class="lead">Today is <?php echo $currentDay . ', ' . $currentDate; ?></p>
                </div>
            </div>
        </main>
        <?php
    }

    public function welcomeSection($conf) {
        ?>
        <div class="container text-center my-5">
            <p>
                <a href="register.php" class="btn btn-primary btn-lg mr-2">Register</a>
                <a href="login.php" class="btn btn-outline-dark btn-lg">Login</a>
            </p>
        </div>
        <?php
    }

    public function formArea($forms) {
        ?>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm p-4">
                        <?php 
                        if (basename($_SERVER['PHP_SELF']) == 'register.php') {
                            $forms->registerForm();
                        } else {
                            $forms->loginForm();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public function footer($conf) {
        ?>
        <footer>
            <p>&copy; <?php echo $conf['site_name'] . " " . date("Y"); ?></p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
        </body>
        </html>
        <?php
    }
}
