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

        <main>
            <h2>My Resume</h2>
            <h3>Education</h3>
            <ul>
                <li>Bachelor of Science in Computer Science, University of Wisconsin-Stout, Expected Graduation: May 2025</li>
                <li>Minor in Mathematics, University of Wisconsin-Stout</li>
                <li>Minor in Digital Marketing, University of Wisconsin-Stout</li>
                <li>Minor in Web Technology, University of Wisconsin-Stout</li>
            </ul>
            <h3>Work Experience</h3>
                <ul>
                    <li>Academic Resource Coordinator, University of Wisconsin-Stout Housing, August 2021 - Present
                        <ul>
                            <li>Advise first-year residents on academics and connect them with faculty and campus resources.</li>
                            <li>Host events and distribute newsletters to build academic engagement and community.</li>
                            <li>Serve as a security resource, maintaining confidentiality and supporting safety protocols.</li>
                        </ul>
                    </li>
                </ul>
            <h3>Skills</h3>
                <ul>
                    <li>Programming Languages: Java, JavaScript, HTML, CSS, SQL</li>
                    <li>Web Development: Experience with front-end and back-end development, responsive design, and user experience optimization.</li>
                    <li>Database Management: Proficient in SQL and database design principles.</li>
                    <li>Problem-Solving: Strong analytical skills with the ability to troubleshoot and resolve technical issues efficiently.</li>
                </ul>
                    
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