<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Check if fullname is set in session
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : 'Guest';

include 'database.php';

// Fetch videos from the database, including the video ID
$query = "SELECT id, title, description, video_url, username FROM videos";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="Assets/Logo.png">
    <title>Unifilx | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styless.css">
    <style>
        .pro img {
            border-radius: 50%;
            width: 15px;
            height: 15px;
            background-color: #EC6090;
        } 
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="nav-container">
            <a href="home.php" class="nav-logo">UNIFLIX</a>
            <ul class="nav-menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="profile.php" class="pro"><img src="Assets/1.png"></a></li>   
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
        <!-- Overlay Box with Text and Buttons -->
        <div class="vid">
            <div class="video-text-box">
                <div class="container">
                    <h2><span class="text1">START YOUR UNIFLIX<span style="color: #E75E8D;"> Journey NOW..!</span></span></h2>
                    <a href="golive.php" class="log">Start Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="content-container">
        <!-- Greeting with User Full Name -->
        <h1 style="text-align: center;">Welcome,<a href="profile.php"><span style="color: #E75E8D;"><?php echo htmlspecialchars($_SESSION['fullname']); ?></span>!</a> </h1>
        
        <!-- Instructions -->
        <h1 style="text-align: center;">How to upload <span style="color: #E75E8D;"><u>your VIDEOoo!</u></span></h1>
        <div class="row">
            <div class="box">
                <img src="Assets/pro.png" alt="Image 1" class="box-image" height="100px">
                <h2>Go to Profile</h2>
                <p class="quote">"On the top right corner on your profile"</p>
            </div>

            <div class="box">
                <img src="Assets/wifi.png" alt="Image 2" class="box-image" height="99px">
                <h2>Select Upload</h2>
                <p class="quote">"Select upload video option for the following."</p>
            </div>

            <div class="box">
                <img src="Assets/Live.png" alt="Image 3" class="box-image" height="99px">
                <h2>Click on Upload Video</h2>
                <p class="quote">"Enter Title and Description and upload video"</p>
            </div>
        </div>
        
        <!--Live Stream-->
        <section class="ongoing-streams">
            <h2 style="text-align: center;">Latest <span style="color: #E75E8D;"><u>Streams</u></span></h2>
            <div class="stream-grid">
                <?php if (mysqli_num_rows($result) > 0) : ?>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <a href="view_video.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="stream-card">
                            <img src="Assets/p.jpeg" alt="Stream Thumbnail">
                            <div class="stream-info">
                                <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                                <p><?php echo htmlspecialchars($row['description']); ?></p>
                                <!-- You can add more details like viewer count here -->
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>No ongoing streams available.</p>
                <?php endif; ?>
            </div>
        </section>
        
        <section>
            <div class="content-container">
                <!-- Additional Information -->
                <h1 style="text-align: center;">UNIFLIX offers superior <br><span style="color: #E75E8D;"><u>Live Streaming</u></span></h1>
                <div class="row">
                    <div class="box">
                        <img src="https://holaa.codexshaper.com/html/assets/images/icons/feathur-1.svg" alt="Image 1" class="box-image">
                        <h2><span style="text-transform: uppercase;">Flexible Streaming</span></h2>
                        <p class="quote">"Flexible streaming allows users to customize their viewing experience"</p>
                    </div>
        
                    <div class="box">
                        <img src="https://holaa.codexshaper.com/html/assets/images/icons/feathur-2.svg" alt="Image 2" class="box-image">
                        <h2><span style="text-transform: uppercase;">Super Fast Quality</span></h2>
                        <p class="quote">"Super fast quality ensures an excellent streaming experience"</p>
                    </div>
        
                    <div class="box">
                        <img src="https://holaa.codexshaper.com/html/assets/images/icons/feathur-3.svg" alt="Image 3" class="box-image">
                        <h2><span style="text-transform: uppercase;">Watch from Anywhere</span></h2>
                        <p class="quote">"Watch from anywhere, enjoy your favorite content on the go"</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="foot">
            <div class="footer">
                <div class="contact-us">
                    <h2><a href="">UNIFLIX</a></h2>
                    <p class="sp">Welcome to Unifilx, your ultimate destination for seamless and high-quality live streaming experiences.<br>Join our community to start your streaming journey, watch your favorite streams from anywhere, and enjoy content like never before. With Unifilx, superior streaming is just a click away!</p>
                    <br>
                    <h3>Stay-up to date with UNIFLIX</h3>
                    <p>Follow us on social media for<br>special promotions and important news.</p>
                    <div class="social-icons">
                        <a href="https://x.com/yourprofile" target="_blank"><i class="fab fa-x-twitter"></i> X(Twitter)</a>
                        <a href="https://www.instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="https://www.facebook.com/yourprofile" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="https://www.youtube.com/yourchannel" target="_blank"><i class="fab fa-youtube"></i> YouTube</a>
                    </div>
                </div>                
            </div>
        </section>
    </div>
</body>
</html>
