<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Week 10 Lab: Gallery</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <?php
                include "/home/stoutmartech/public_html/users/pytleskia5362/archive/labs/week10_bioincludes/includes/header.php";
            ?>
        </header>
        <nav>
            <?php
                include "/home/stoutmartech/public_html/users/pytleskia5362/archive/labs/week10_bioincludes/includes/nav.php";
            ?>
        </nav>
        <main>
            <div class="gallery-section">
                <h2>Image Gallery</h2>
                <div class="images-gallery">
                    <img src="images/gooseberry.jpg" alt="Gooseberry Falls" class="gallery">
                    <img src="images/ian_and_me.jpg" alt="Picture of me and my boyfriend at Split Rock State Park" class="gallery">
                    <img src="images/devils.JPEG" alt="Picture of me ready for Blue Devil football" class="gallery">
                    <img src="images/family.JPEG" alt="Picutre of my family" class="gallery">
                    <img src="images/lanterns.JPEG" alt="Picture of me with my sister at a lantern festival" class="gallery">
                    <img src="images/friends.JPEG" alt="Picture of my friends" class="gallery">
                </div>
            </div>
        </main>
        <br>
        <footer>
            <?php
                include "/home/stoutmartech/public_html/users/pytleskia5362/archive/labs/week10_bioincludes/includes/footer.php";
            ?>
        </footer>
    </div>
</body>
</html>