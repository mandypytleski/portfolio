<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset/css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=MonteCarlo&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/042720a483.js" crossorigin="anonymous"></script>
    <title>Pytleski Consulting: Contact</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <?php
                include "/home/stoutmartech/public_html/users/pytleskia5362/includes/header.php";
            ?>
        </header>
        
        <main>
            <h1>Ready to get started?</h1>
            <p style="text-align: center;">Fill out the form below! No committment attached, just a quick chat to see if we are a good fit!</p>    

            <form action="thank-you.php" method="post">
                <div class="form-row">
                    <label>Name:</label>
                    <input type="text">
                </div>

                <div class="form-row">
                    <label>Email:</label>
                    <input type="email">
                </div>

                <div class="form-row">
                    <label>Phone Number:</label>
                    <input type="tel">
                </div>

                <div class="form-row">
                    <label>Business:</label>
                    <input type="text">
                </div>

                <div class="form-row">
                    <label>Comments:</label>
                    <textarea></textarea>
                </div>
                
                <input class="submit-button" type="submit" value="Submit">
            </form>
        <br>
            <section class="testimonial">
                <img class="testimonial-image" src="/images/avatar.png" alt="testimonial photo">
                <p class="testimonial-name">Maggie, Great Plains Transportation Services</p>
                <blockquote>
                    “Mandy transformed our online presence and helped us grow faster than we imagined. She’s professional, creative, and amazing to work with!”
                </blockquote>
            </section>

            <section class="contact-details">
                <h2>Already working with me?</h2>

                <div class="contact-row">
                    <div class="contact-box">
                        <p><strong>Email:</strong> <a href="mailto:mandypytleski@outlook.com">mandypytleski@outlook.com</a></p>
                        <p><strong>Phone:</strong> <a href="tel:5555555555">(555) 555-5555</a></p>
                    </div>

                    <div class="social-links">
                        <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn">
                            <i class="fa-brands fa-square-linkedin"></i>
                        </a>
                    </div>
                </div>
            </section>
            <br>
            <br>
        </main>
    </div>

        <br>

        <footer>
        <?php
            include "/home/stoutmartech/public_html/users/pytleskia5362/includes/footer.php";
        ?>    
    </footer>
    
</body>
<script src="javascript/script.js"></script>

</html>