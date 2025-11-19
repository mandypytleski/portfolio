<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset/css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Week 10 Lab: Home</title>
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

        <!--Section for all about me-->
        <main class="main-home">
            <h2>Contact Me</h2>
            <form method="post" action="https://bangerc.stoutmartech.com/dmt275/class9-form.php">
                <p><label>Name:</label><input type="text" name="name"></p>
                <p><label>Email:</label><input type="email" name="email"></p>
                <p><label>Comments:</label><textarea name="comments"></textarea></p>
                <p><input class="submit-button" type="submit" value="Submit"></p>
            </form>
        </main>
        <footer>
            <?php
                include "/home/stoutmartech/public_html/users/pytleskia5362/archive/labs/week10_bioincludes/includes/footer.php";
            ?>
        </footer>
    </div>
</body>
</html>