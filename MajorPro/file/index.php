<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="Assets/Logo.png">
    <title>Unifilx</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styless.css">
    <style>
        a{
            text-decoration: none;
            color: white;
        }
        .stream-card a {
            text-decoration: none;
            color: white;
        }
    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px; /* Optional: Add some top margin if needed */
    }
    .box1 {
        background-color: #333;
        padding: 20px;
        text-align: center;
        border-radius: 8px;
        width: 250px;
        margin: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    }
    </style>
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
                <li><a href="Login.php" class="log">Login</a></li>
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
                    <h2><span class="text1">START YOUR <span style="color: #E75E8D;">STREAMING JOURNEY</span>WITH US..!</span></h2>
                    <a href="signup.php" class="log">BECOME A MEMBER</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="content-container">
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
            <h2 style="text-align: center;">Ongoing <span style="color: #E75E8D;"><u>Streams</u></span></h2>
            
            <div class="center-container">
                <div class="box1">
                    <h2><a href="Login.php"><span style="color: #E75E8D;"><u>Login</u></a></span> for Latest Streams!.</h2>
                </div>
            </div>
        </section>

        

        <section>
            <div class="content-container">
                <!-- Row Layout (Horizontal) -->
                <h1 style="text-align: center;">UNIFLIX is offers superior <br><span style="color: #E75E8D;"><u> Streaming</u></span></h1>
                <div class="row">
                    <div class="box">
                        <img src="https://holaa.codexshaper.com/html/assets/images/icons/feathur-1.svg" alt="Image 1" class="box-image">
                        <h2><span style="text-transform:uppercase;">Flexible Streaming</span></h2>
                        <p class="quote">"Flexible streaming allows users to use customize their viewing experience"</p>
                    </div>
        
                    <div class="box">
                        <img src="https://holaa.codexshaper.com/html/assets/images/icons/feathur-2.svg" alt="Image 2" class="box-image">
                        <h2><span style="text-transform:uppercase;">Super fast quality</span> </h2>
                        <p class="quote">"Super fast quality allows users to use customize their viewing experience"</p>
                    </div>
        
                    <div class="box">
                        <img src="https://holaa.codexshaper.com/html/assets/images/icons/feathur-3.svg" alt="Image 3" class="box-image">
                        <h2><span style="text-transform:uppercase;">Watch from anywhere</span></h2>
                        <p class="quote">"Watch from anywhere allows users to use customize their viewing experience"</p>
                    </div>
                </div>
        </section>
        <section class="foot">
            <div class="footer">
                <div class="contact-us">
                    <h2><a href="">UNIFLIX</a></h2>
                    <p class="sp">Welcome to Unifilx, your ultimate destination for seamless and high-quality streaming experiences.<br>Join our community to start your streaming journey, watch your favorite streams from anywhere, and enjoy content like never before. With Unifilx, superior streaming is just a click away!</p>
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
