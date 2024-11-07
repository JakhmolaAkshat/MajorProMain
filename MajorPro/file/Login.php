<?php
session_start();
include 'database.php'; // Ensure this is the correct path to your database connection file

// Check if the form is submitted
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['fullname'] = $row['fullname']; // Add this line
            header('Location: home.php');
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="Assets/Logo.png">
    <title>Unifilx | Login</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="nav-container">
            <a href="index.php" class="nav-logo">UNIFLIX</a>
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!-- Video Section -->
    <div class="video-container">
        <div class="video-overlay"></div>
        <video autoplay muted loop>
            <source src="Assets/3.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>    
        <!-- Overlay Box with Login Form -->
        <div class="log-box">
            <div class="wrapper">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <div class="input-box">
                        <input type="email" placeholder="Enter Email:" name="email" class="form-control">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Enter Password:" name="password" class="form-control">
                    </div>
                    <div class="input-box button">
                        <input style="background-color: aliceblue; color: #E75E8D;" type="submit" value="Login" name="login" class="btn btn-primary">
                    </div>
                    <h3>Become a Member <a href="signup.php">Signup</a> Now!</h3>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
