<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=MonteCarlo&display=swap" rel="stylesheet">
    <title>Pytleski Consulting: Marketing Portfolio</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <?php
                include "/home/stoutmartech/public_html/users/pytleskia5362/includes/header.php";
            ?>
        </header>

        <main>
            <h1>Marketing Portfolio</h1>
            <div class="masonry-portfolio">
                
                <div class="masonry-grid">
                    <div class="masonry-item wide">
                        <img src="images/competitor.png" alt="Competitor Analysis">
                        <div class="masonry-info">
                            <h3>Competitor Analysis</h3>
                            <p>I conducted a comprehensive competitor analysis and presented actionable insights to the company owners. The project identified key market opportunities, strengths, and weaknesses, helping guide strategic decisions and improve the company’s competitive positioning.</p>
                        </div>
                    </div>

                    <div class="masonry-item tall">
                        <img src="images/success.png" alt="Email Campaign">
                        <div class="masonry-info">
                            <h3>Email Campaigns</h3>
                            <p>I created a targeted email campaign with custom templates and personalized messaging, achieving a 28% open rate and 12% click-through rate. This project demonstrates my ability to combine design and strategy to drive measurable results.</p>
                        </div>
                    </div>

                    <div class="masonry-item">
                        <img src="images/social.png" alt="Social Media Campaign">
                        <div class="masonry-info">
                            <h3>Social Media Campaign</h3>
                            <p>I developed and managed a social media campaign that boosted interactions by 86%, shares by 74%, and impressions by 28%. This project highlights my ability to create engaging content and strategies that drive real audience growth and brand visibility.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="scroll-portfolio">
                <h1 style="text-align:center;">Social Media Portfolio</h1>
                <div class="carousel-container">
                    <button class="carousel-btn left" aria-label="Previous">&lt;</button>
                    <div class="carousel">
                        <div class="carousel-track">
                            <div class="carousel-card active">
                                <img src="images/before-after.png" alt="Before and After">
                            </div>
                            <div class="carousel-card">
                                <img src="images/blog-1.png" alt="Blog Part 1">
                            </div>
                            <div class="carousel-card">
                                <img src="images/blog-2.png" alt="Blog Part 2">
                            </div>
                            <div class="carousel-card">
                                <img src="images/contest.png" alt="Contest">
                            </div>
                            <div class="carousel-card">
                                <img src="images/dirver-appreciation.png" alt="Driver Appreciation">
                            </div>
                            <div class="carousel-card">
                                <img src="images/fff.png" alt="Factor For Free">
                            </div>
                            <div class="carousel-card">
                                <img src="images/holidays.png" alt="Happy Holidays">
                            </div>
                            <div class="carousel-card">
                                <img src="images/new-blog.png" alt="New Blog Alert">
                            </div>
                            <div class="carousel-card">
                                <img src="images/target-persona.png" alt="Target Persona">
                            </div>
                            <div class="carousel-card">
                                <img src="images/testimonial.png" alt="Testimonial">
                            </div>
                            <div class="carousel-card">
                                <img src="images/thanksgiving.png" alt="Thanksgiving">
                            </div>
                            <div class="carousel-card">
                                <video controls>
                                    <source src="images/video.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="carousel-card">
                                <img src="images/what-is-factoring.png" alt="What is Factoring?">
                            </div>
                            <div class="carousel-card">
                                <img src="images/winter.png" alt="Factor For Free">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-btn right" aria-label="Next">&gt;</button>
                </div>
            </div>

            <section class="cta">
                <?php
                    include "/home/stoutmartech/public_html/users/pytleskia5362/includes/cta.php";
                ?> 
            </section>
        </main>
    </div>

    <footer>
        <?php
            include "/home/stoutmartech/public_html/users/pytleskia5362/includes/footer.php";
        ?>    
    </footer>

    <script src="javascript/script.js"></script>
</body>
</html>
