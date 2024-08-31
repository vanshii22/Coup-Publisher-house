<?php include_once 'components/head.php';
$current_page = basename($_SERVER['PHP_SELF']) ?>

<body>

    <!-- Top Navbar Start-->
    <div class="top_header">
        <div class="container">
            <div class="top_wrapper text-light">
                <div class="top_tag"><i class="fa-solid fa-bookmark"></i> Best Book Publisher in India</div>
                <div class="top_email"><a href="mailto:thecouppublishinghouse@gmail.com" class="top_email"><i
                            class="fa-solid fa-envelope"></i> thecouppublishinghouse@gmail.com</a></div>
                <div class="top_phone"><a href="tel:+918267992305" class="top_phone"><i class="fa-solid fa-phone"></i>
                        +91 8267992305</a></div>
                <div class="social-link">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://x.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Navbar End-->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.svg" alt="The Coup Publishing House"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"
                            aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'about-us.php') ? 'active' : ''; ?>"
                            href="about-us.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'our-books.php') ? 'active' : ''; ?>"
                            href="our-books.php">Our books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'about-us.php#vision') ? 'active' : ''; ?>"
                            href="about-us.php#vision">Our Vision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'about-us.php#team') ? 'active' : ''; ?>"
                            href="about-us.php#team">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact-us.php" class="btn btn-outline-success">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>