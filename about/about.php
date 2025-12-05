<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset/css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=MonteCarlo&display=swap" rel="stylesheet">
    <title>Pytleski Consulting: About</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <?php
                include "/home/stoutmartech/public_html/users/pytleskia5362/includes/header.php";
            ?>
        </header>
        
        <main>
            
            <h1>About Me</h1>

    <p style="text-align:center; max-width:700px; margin: 1em auto;">
        Welcome! I’m so glad you’re here. Whether you're interested in my work, my story, 
        or just looking to learn more before starting a project together, this page will guide you 
        to everything you need.
    </p>

    <div class="cards-container">

        <div class="card">
            <img src="../images/logo.png" class="card-image" alt="Professional background">
            <h3>Professional Background</h3>
            <p>
                Explore my experience in web design, consulting, and marketing — 
                including past work, skills, and accomplishments.
            </p>
            <a href="background.html" class="cta-button">View Background</a>
        </div>

        <div class="card">
            <img src="images/blaze.jpg" class="card-image" alt="Personal life">
            <h3>Personal</h3>
            <p>
                Learn more about who I am beyond work — the people, hobbies, and lifestyle 
                that shape how I show up for my clients.
            </p>
            <a href="personal.html" class="cta-button">See Personal Page</a>
        </div>

        <div class="card">
            <img src="images/question.png" class="card-image" alt="Frequently asked questions">
            <h3>FAQ</h3>
            <p>
                Find quick answers to the most common questions I receive about projects, 
                pricing, timelines, and more.
            </p>
            <a href="faq.html" class="cta-button">Read FAQs</a>
        </div>

    </div>
            <section class="cta">
                <?php
                    include "/home/stoutmartech/public_html/users/pytleskia5362/includes/cta.php";
                ?> 
            </section>


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