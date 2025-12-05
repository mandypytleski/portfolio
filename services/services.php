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
    <title>Pytleski Consulting: Services</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <?php
                include "/home/stoutmartech/public_html/users/pytleskia5362/includes/header.php";
            ?>
        </header>
        
        <main>
            <h1>My Services</h1>
            <div class="intro">
                <img class="intro-image" src="images/marketing.png">
                <div class="intro-text">
                    <h2>Marketing</h2>
                    <p>Looking to grow your audience and make a real impact online? Our Marketing Services page shows how we help businesses connect with their customers through smart, results-driven strategies. From eye-catching campaigns to targeted content, discover the tools and techniques that can take your brand to the next level. Click through to see how we turn ideas into measurable results!</p>
                    <a href="/services/marketing.php" class="cta-button">Learn More</a>
                </div>
            </div>

            <div class="intro-reverse">
                <img class="intro-image" src="images/website.png">
                <div class="intro-text">
                    <h2>Websites</h2>
                    <p>Looking to grow your audience and make a real impact online? Our Marketing Services page shows how we help businesses connect with their customers through smart, results-driven strategies. From eye-catching campaigns to targeted content, discover the tools and techniques that can take your brand to the next level. Click through to see how we turn ideas into measurable results!</p>
                    <a href="/services/websites.php" class="cta-button">Learn More</a>
                </div>
            </div>

            <div class="intro">
                <img class="intro-image" src="images/packages.png">
                <div class="intro-text">
                    <h2>Packages</h2>
                    <p>Ready to take the next step? Our Packages page breaks down clear, flexible options designed to fit businesses of every size and stage. Whether you’re looking for a simple refresh or a full-service solution, you’ll find transparent pricing, straightforward features, and bundles that deliver real value. Explore the packages to see which one aligns best with your goals—and start building something amazing.</p>
                    <a href="/services/packages.php" class="cta-button">Learn More</a>
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