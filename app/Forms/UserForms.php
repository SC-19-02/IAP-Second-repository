<?php
class UserForms {

    // Registration form
    public function registerForm() {
        ?>
        <form method="post" action="submit.php">
            <h2 class="text-center mb-4">Register</h2>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="student_id">Student ID:</label>
                <input type="text" class="form-control" id="student_id" name="student_id" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Create Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Register</button>

            <p class="text-center mt-3">
                <a href="login.php">Go to Login</a>
            </p>
        </form>
        <?php
    }

    // Login form
    public function loginForm() {
        ?>
        <form method="post" action="login.php">
            <h2 class="text-center mb-4">Login</h2>

            <div class="form-group">
                <label for="student_id">Student ID:</label>
                <input type="text" class="form-control" id="student_id" name="student_id" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button>

            <p class="text-center mt-3">
                <a href="register.php">Go to Register</a>
            </p>
        </form>
        <?php
    }
}
?>
