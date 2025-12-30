<head>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<body <?php body_class(); ?>>
   
<footer class="footer">
    <div class="footer-container">
        <div class="footer-col">
            <h3>Ohana Clinic</h3>
            <p>
                A team of doctors working to ensure<br>
                you receive the best treatment.
            </p>

            <div class="contact">
                <p><i class="fas fa-phone"></i> 017 300 300 / 070 300 800</p>
                <p><i class="fas fa-envelope"></i> info@ohanaclinic.com</p>
            </div>
        </div>
        <div class="footer-col">
            <h3>About</h3>
            <ul>
                <li><a href="#">Who we are?</a></li>
                <li><a href="#">Why Choose Ohana?</a></li>
                <li><a href="#">Our Facilities</a></li>
                <li><a href="#">Services</a></li>
            </ul>
        </div>
        <div class="footer-col center">
            <h3>Our Content</h3>

            <div class="awards">
                <a href="">Home</a><br>
                <a href="">First Visit Information</a><br>
                <a href="">About our Hospital</a><br>
                <a href="">Medical Information</a><br>
                <a href="">Inquiry</a><br>
                <a href="">Access and Consultation Hours</a><br>
            </div>
        </div>
        <div class="footer-col">
            <h3>Social</h3>
            <p>
                Visit Ohana Clinic on these social links
                and connect with us. Make sure to follow
                our accounts for regular updates.
            </p>

            <div class="social-icons">
                <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="tw" href="#"><i class="fab fa-twitter"></i></a>
                <a class="in" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="ig" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <p>Copyright 2026 by Ohana Clinic.</p>

        <div class="footer-links">
            <a href="#">Contact</a>
            <a href="#">Book Appointment</a>
            <a href="#">↑ BACK TO TOP</a>
        </div>
    </div>
</footer>
</body>