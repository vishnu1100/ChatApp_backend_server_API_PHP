<?php
session_start();
include './db/db.php';

// Handle registration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Check if the username already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Username already exists, set an error message
        $error = "Username already taken. Please choose another one.";
    } else {
        // Prepare and execute the insert statement
        $stmt->close(); // Close the previous statement
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
        
        if ($stmt->execute()) {
            $_SESSION['username'] = $username;
            header('Location: index.php'); // Redirect to the main chat page
            exit(); // Ensure script stops after redirection
        } else {
            $error = "Error: " . $stmt->error; // Capture any errors
        }
    }
    
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://img.icons8.com/color/48/hearts.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Create an Account
                </span>

                <?php if (isset($error)): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>

                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="register.php">
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="User name" required>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="container-login100-form-btn m-t-20">
                        <a href="login.php" class="btn btn-secondary">Already have an account? Login</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
