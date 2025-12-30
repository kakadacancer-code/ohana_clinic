<head>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="menu">
                <div class="menu-bar">
                    <a href="#"><img src="http://ohana-clinic.test/wp-content/uploads/2025/12/ohana-removebg-preview.png" alt=""></a>
                    <div class="contact">
                        <div class="phone-number">
                         
                            <img src="http://ohana-clinic.test/wp-content/uploads/2025/12/icon.png" alt="">
                            <div class="number">
                                <span>+63 912 345 6789</span><br>
                                <span>+63 912 345 6789</span><br>
                                <span>Customer service</span><br>
                            </div>
                        </div>
                        <div class="platform">
                            <a href=""><i class="fa-brands fa-telegram"></i>Telegram</a>
                            <a href=""><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
                        </div>
                    </div>
                </div>
                <nav class="navigation">
                    <ul>
                        <li><a href="<?= home_url(); ?>">Home</a></li>
                        <li><a href="<?= home_url(); ?>/first-visit-information">First Visit Information</a></li>
                        <li><a href="<?= home_url(); ?>/about-our-hospital">About our Hospital</a></li>
                        <li><a href="<?= home_url(); ?>/medical-information">Medical Information</a></li>
                        <li><a href="<?= home_url(); ?>/inquiry">Inquiry</a></li>
                        <li><a href="<?= home_url(); ?>/access-and-consultation-hours">Access and Consultation Hours</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>