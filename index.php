<?php

$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != '') {
   
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      
        //submit the form

       $userName = $_POST['name'];
       $userEmail = $_POST['email'];
       $message = $_POST['message'];

       $subject = 'omniweb';


       $to = "info@omni-web.co.za";
       $body = "";

       $body .="From:".$userName. "\n\n";
       $body .="Email:".$userEmail. "\n\n";
       $body .="Message:".$message. "\n\n";

       mail($to, $subject, $body);
       
       $message_sent = true; 
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>OmniWeb</title>
    <link rel="stylesheet" href="//unpkg.com/a11y-slider@latest/dist/a11y-slider.css" />
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!-- Mobile Navigation Header -->
    <nav class="mobile-navigation">
        <header class="navbar container">
            <div class="logo">
                <img class="omniweb-logo" src="assets/omniweb-logo.png" alt="omniweb logo" style="width:50%; height:auto; margin-top:20px;">
            </div>
        </header>
        <nav class="mobile-nav-links">
            <ul>
                <li class="nav-link" onclick="mobileRemoveActive()"><a href="#about">About</a></li>
                <li class="nav-link" onclick="mobileRemoveActive()"><a href="#services">Services</a></li>
                <li class="nav-link" onclick="mobileRemoveActive()"><a href="#projects">Projects</a></li>
                <li class="nav-link" onclick="mobileRemoveActive()"><a href="#contact">Contact</a></li>
            </ul>

        </nav>   
    </nav>


    <header id="navbar" class="navbar container">
        <div class="logo">
            <img class="omniweb-logo" src="assets/omniweb-logo.png" alt="omniweb logo" style="width:60%; height:auto;">
        </div>
        <nav class="desktop-nav">
            <ul>
                <li class="nav-link"><a href="#about">About</a></li>
                <li class="nav-link"><a href="#services">Services</a></li>
                <li class="nav-link"><a href="#projects">Projects</a></li>
                <a href="#contact"><li class="contact-btn btn-9">Contact</li></a>
            </ul>
            
        </nav>
        <div class="toggle" onclick="toggleMenu()"></div>
        

    </header>
    
    <main>
    <div id="particles-js"></div>

        <div class="hero-container container">
            <div class="hero-text">
                <h2>Welcome to <span class="hero-span">OmniWeb</span> Digital Solutions</h2>
                <br>
                <p>Launch your business into the digital age with our high quality services.</p>
                <br>
                <a href="#contact"><button class="contact-btn btn-9">Contact</button></a>
            </div>
        </div>

        <div id="about" class="about-container container">
            
            
            <div data-aos="fade-right" class="about-text">
                <h3 data-aos="fade-right" class="h3-about">About Us</h3>
                <br>
                <p data-aos="fade-right" class="about-intro">A highly creative team in technical and design solutions.</p>
                <br>
                <p class="about-description" data-aos="fade-right">Empowering individuals and businesses to develop their ideas and expand them with the highest standards that compete with the largest competitors in their fields, using the most advanced and latest technologies with optimized performance, security, cost and experience.</p>
            </div>
                <div data-aos="fade-left" class="about-image">
                    <img class="about-pseudo" src="assets/about.svg" alt="about us image">
                </div>
            </div>
        </div>       
              

            <div id="services" class="services-container container">
                <h3 data-aos="fade-up" class="h3-title">Services</h3>
                <div class="services-grid">
                    <div data-aos="fade-up" class="card">
                        <img src="assets/icons8-web-development.svg" alt="web design icon">
                        <h5>Web Development</h5>
                        <p>Professionally built custom websites using the power of code and modern technologies.</p>
                    </div>

                    <div data-aos="fade-up" class="card">
                        <img src="assets/online-community-icon.svg" alt="social media icon">
                        <h5>Social Media</h5>
                        <p>Extending the reach of businesses by leveraging social media. We manage your companies online presence.</p>
                    </div>

                    <div data-aos="fade-up" class="card">
                        <img src="assets/chart-arrow-up-icon.svg" alt="seo icon">
                        <h5>SEO</h5>
                        <p>Increase your companies visibility on search engines like google to drive more traffic to your website and business.</p>
                    </div>

                    <div data-aos="fade-up" class="card">
                        <img src="assets/web-design-brush-icon.svg" alt="graphic design icon">
                        <h5>Graphic Design</h5>
                        <p>Creating visually appealing digital content that adds functional value to your business.</p>
                    </div>

                    <div data-aos="fade-up" class="card">
                        <img src="assets/user-network-icon.svg" alt="digital marketing icon">
                        <h5>Digital Marketing</h5>
                        <p>Promoting businesses to connect with potential customers using the internet and other forms of digital communication.    
                        </p>
                    </div>

                    <div data-aos="fade-up" class="card">
                        <img src="assets/internet-marketing-icon.svg" alt="advert icon">
                        <h5>Advertising</h5>
                        <p>Run high conversion advertising campaigns driven by data and results.</p>
                    </div>
                </div>
            </div>
            

            <!-- Technology Container Carousel -->
            <div id="technology" class="technology-container container">
                <h3 data-aos="fade-up" class="h3-title tech-margin">Technology</h3>
                <p class="tech-description" data-aos="fade-up">The technologies we use to build captivating products and experiences.</p>
                <ul data-aos="fade-up" class="slider">
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-html5.svg" alt="html5 icon">
                            <p>HTML5</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-css3.svg" alt="css3 icon">
                            <p>CSS3</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-sass.svg" alt="sass icon">
                            <p>SASS</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-tailwind-css.svg" alt="tailwind icon">
                            <p>Tailwind</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-bootstrap.svg" alt="boostrap icon">
                            <p>Bootstrap</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/figma.svg" alt="figma icon">
                            <p>Figma</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-javascript.svg" alt="javascript icon">
                            <p>Javascript</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-php.svg" alt="php icon">
                            <p>PHP</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-laravel-64.png" alt="laravel icon">
                            <p>Laravel</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-my-sql.svg" alt="mysql icon">
                            <p>MySQL</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-wordpress.svg" alt="wordpress icon">
                            <p>Wordpress</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-shopify.svg" alt="shopify icon">
                            <p>Shopify</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-wix.svg" alt="wix icon">
                            <p>Wix</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-canva.svg" alt="canva icon">
                            <p>Canva</p>
                        </div>
                    </li>
                    <li>
                        <div class="tech-content">
                            <img src="assets/tech/icons8-photoshop.svg" alt="Photoshop icon">
                            <p>Photoshop</p>
                        </div>
                    </li>
                    
                </ul>
            </div>

            <div id="projects" class="project-container container">
                <h3 data-aos="fade-up" id="project" class="h3-title project-margin">Projects</h3>
                <div class="project-section">
                    <!-- Project Card 1 -->
                    <div class="project-card flex-reverse">
                        <div data-aos="fade-right" class="project-card-text">
                            <h6>Trading Illustrated</h6>
                            <br>
                            <p class="project-description">Social Media Management & Graphic Design</p>
                            <br>
                            <p class="description">Trading Illustrated is a forex trading company that we provide fulltime social media management. Our service has succesfully increased growth and sales.</p>
                            <button class="contact-btn btn-9" onclick="window.location.href='https://www.instagram.com/trading_illustrated/?hl=en';"><a href="https://www.instagram.com/trading_illustrated/?hl=en">View</a></button>
                        </div>
                        <div data-aos="fade-left" class="project-image-container img-right">
                            <img class="project-img " src="assets/mockups/trading-illustrated.png" alt="">
                        </div>
                    </div>
                     <!-- Project Card 2 -->
                    <div class="project-card">
                        <div data-aos="fade-right" class="project-image-container img-left">
                            <img class="project-img" src="assets/mockups/gym-website1.png" alt="">
                        </div>
                        <div data-aos="fade-left" class="project-card-text">
                            <h6>The Power Room</h6>
                            <br>
                            <p class="project-description">Web Development & UX/UI Design</p>
                            <br>
                            <p class="description">A custom stylish and aesthetic website built for The Power Room gymnasium using modern frameworks like Tailwind.</p>
                            <button class="contact-btn btn-9" onclick="window.location.href='https://deenodev.github.io/Gym-Website-Tailwind/';"><a href="https://deenodev.github.io/Gym-Website-Tailwind/">View</a></button>
                        </div>
                        
                    </div>
                     <!-- Project Card 3 -->
                    <div class="project-card flex-reverse">
                        <div data-aos="fade-right" class="project-card-text">
                            <h6>MedFin Solutions</h6>
                            <br>
                            <p class="project-description">Web Development & UX/UI Design</p>
                            <br>
                            <p class="description">MedFin Solutions is a medical aid and insurance company that used our services to build an elegant and sophisticated website to represent the face of their business.</p>
                            
                            <button class="contact-btn btn-9" onclick="window.location.href='https://deenodev.github.io/MedFin-Solutions-Website/';"><a href="https://deenodev.github.io/MedFin-Solutions-Website/">View</a></button>
                        </div>
                        <div data-aos="fade-left" class="project-image-container img-right">
                            <img class="project-img " src="assets/mockups/medical-aid1.png" alt="">
                        </div>
                    </div>
                     <!-- Project Card 4 -->
                    <div class="project-card">
                        <div data-aos="fade-right" class="project-image-container img-left">
                            <img class="project-img" src="assets/mockups/nft.png" alt="">    
                        </div>
                        <div data-aos="fade-left" class="project-card-text">
                            <h6>Krypto</h6>
                            <br>
                            <p class="project-description">UI/UX Design</p>
                            <br>
                            <p class="description">A modern looking landing page for a concept cryptocurrency company that applies the best user experience and user interface design principles which can later be implimented in the web development process.</p>
                            <button class="contact-btn btn-9" onclick="window.location.href='https://www.figma.com/proto/64Nle4oWwO4u2jBhm9HpPU/Flux---Figma-Build-Tutorial-(Starter)-(Community)?type=design&node-id=203-2&t=9Xhuf41fjjYSOpFD-1&scaling=min-zoom&page-id=0%3A1&mode=design';"><a href="https://www.figma.com/proto/64Nle4oWwO4u2jBhm9HpPU/Flux---Figma-Build-Tutorial-(Starter)-(Community)?type=design&node-id=203-2&t=9Xhuf41fjjYSOpFD-1&scaling=min-zoom&page-id=0%3A1&mode=design">View</a></button>
                        </div>   
                    </div>
                </div>
            </div>

            <!-- Contact Us Section -->
            <div id="contact" class="contact-section container">
                <div data-aos="fade-up" class="contact-header">
                    <h3 class="h3-title">Contact Us</h3>
            <?php
              if($message_sent):
            ?>
               <p class="thanks">Message Sent!</p>

            <?php
            else: 
            ?>
               
                    <p>Send us a message to get started on your next project.<br>We look forward to working with you.</p>
            <?php
            endif;
            ?>
                </div>

            <?php
              if($message_sent):
            ?>
               <p class="thanks thanks-margin">Thanks, we'll be in touch.</p>

            <?php
            else: 
            ?>

                <form data-aos="fade-up" action="index.php#contact" method="post">
                    <div class="input-container">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Your Name" name="name" required>
                        <label for="name">Email</label>
                        <input type="email" placeholder="Your Email" name="email" required>
                        <label for="message">Message</label>
                        <textarea name="message" placeholder="I am interested in your services" id="message" cols="30" rows="7" required></textarea>  
                    </div>
                    <button class="contact-btn btn-9" type="submit" name="submit" onclick="window.location.href='#contact';">Send</button>
                    </form>
            <?php
            endif;
            ?>
                <p>Click the icons below for alternative contact options.</p>
                <div class="contact-info-section">
                    <div class="contact-details">
                        <div data-aos="fade-right" class="contact-block">
                        <a href="tel:+27 83 881 2184"><img src="assets/square-phone-solid.svg" alt="phone"></a>
                            <p>+27 83 881 2184</p>
                        </div>
                        <div data-aos="fade-down" class="contact-block">
                            <a href="https://wa.me/27838812184?text=Hello.%20I'm%20interested%20in%20your%20services."><img src="assets/square-whatsapp.svg" alt="whatsapp"></a>
                            <p>+27 83 881 2184</p>
                        </div>
                        <div data-aos="fade-left" class="contact-block">
                            <a href="mailto:info@omni-web.co.za?"><img src="assets/envelope-solid.svg" alt="email"></a>
                            <p>info@omni-web.co.za</p>
                        </div>
                        <div data-aos="fade-right" class="contact-block">
                        <a href=""><img src="assets/square-instagram.svg" alt="instagram"></a>
                            <p>Instagram</p>
                        </div>
                        <div data-aos="fade-up" class="contact-block">
                        <a href=""><img src="assets/square-facebook.svg" alt="facebook"></a>
                            <p>Facebook</p>
                        </div>
                        <div data-aos="fade-left" class="contact-block">
                        <a href="https://github.com/DeenoDev"><img src="assets/square-github.svg" alt="github"></a>
                            <p>Github</p>
                        </div>
                        
                    </div>
                </div>


            </div>
    </main>

    <footer class="footer">

        <p>All rights reserved. omni-web.co.za</p>

    </footer>
    
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="//unpkg.com/a11y-slider@latest/dist/a11y-slider.js"></script>
    <script src="main.js"></script>
    <script src="menu.js"></script>
    <script src="stickynav.js"></script>
    
</body>
</html>