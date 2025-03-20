<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kev's Edibles - Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: #c4a484;
            color: #4a3b2f;
            text-align: center;
        }
        header {
            background: #6b8e23;
            color: #c4a484;
            padding: 20px;
            font-size: 28px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
        nav {
            background: #2f2f2f;
            padding: 15px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        nav a {
            color: #c4a484;
            text-decoration: none;
            margin: 15px;
            font-size: 18px;
            font-weight: 600;
            transition: color 0.3s ease-in-out;
        }
        nav a:hover {
            color: #ffd700;
        }
        .container {
            padding: 40px;
            background: #a67b5b;
            border-radius: 10px;
            margin: 20px;
        }
        .blog-section {
            width: 80%;
            margin: 20px auto;
            text-align: left;
            background: #a67b5b;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .blog-post {
            background: #c4a484;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }
        .blog-post h2 {
            color: #6b8e23;
        }
        .blog-post p {
            color: #4a3b2f;
        }
        .blog-post img {
            width: 100%;
            border-radius: 10px;
            margin-top: 10px;
        }
        .read-more {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #2f2f2f;
            color: #c4a484;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s ease-in-out;
        }
        .read-more:hover {
            background: #8b5a2b;
        }
        footer {
            background: #2f2f2f;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
            color: #c4a484;
        }
        .social-icons a {
            color: #c4a484;
            margin: 0 10px;
            font-size: 24px;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: #ffd700;
        }
    </style>
</head>
<body>
    <header>
         Kev's Edibles - Blog 
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="rezepte.php">Rezepte</a>
        <a href="info.php">Wirkung & Dosierung</a>
        <a href="blog.php">Blog</a>
    </nav>
    <div class="container">
        <h1>Willkommen im Kev's Edibles Blog</h1>
        <p>Hier findest du spannende Artikel über Cannabis, seine Wirkung und leckere Rezepte!</p>
    </div>
    <div class="blog-section">
        <div class="blog-post">
            <h2>Die besten Edibles für Anfänger</h2>
            <p>Wenn du neu in der Welt der Cannabis-Edibles bist, solltest du mit niedrigen Dosen anfangen...</p>
            <img src="images/edibles-beginner.jpg" alt="Cannabis Edibles für Anfänger">
            <a href="artikel_anfaenger.php" class="read-more">Mehr lesen</a>
        </div>
        <div class="blog-post">
            <h2>Wie du die perfekte Cannabis-Butter herstellst</h2>
            <p>Cannabis-Butter ist die Basis vieler köstlicher Rezepte...</p>
            <img src="images/cannabis-butter.jpg" alt="Cannabis Butter Rezept">
            <a href="artikel_cannabisbutter.php" class="read-more">Mehr lesen</a>
        </div>
        <div class="blog-post">
            <h2>Die Wirkung von Edibles: Was du wissen musst</h2>
            <p>Edibles wirken anders als gerauchtes Cannabis...</p>
            <img src="images/effects-edibles.jpg" alt="Die Wirkung von Edibles">
            <a href="artikel_edible_wirkung.php" class="read-more">Mehr lesen</a>
        </div>
        <div class="blog-post">
            <h2>Top 5 Cannabis-Edibles, die du probieren musst</h2>
            <p>Hier sind fünf leckere Edibles, die du unbedingt ausprobieren solltest...</p>
            <img src="images/top5-edibles.jpg" alt="Top 5 Cannabis Edibles">
            <a href="artikel_top5_edibles.php" class="read-more">Mehr lesen</a>
        </div>
        <div class="blog-post">
            <h2>Wie man die Wirkung von Edibles verstärkt</h2>
            <p>Möchtest du das Beste aus deinen Edibles herausholen?...</p>
            <img src="images/enhance-effects.jpg" alt="Wie man die Wirkung von Edibles verstärkt">
            <a href="artikel_edibles_verstaerken.php" class="read-more">Mehr lesen</a>
        </div>
    </div>
    <footer>
        
        
    <p><strong>Disclaimer:</strong> Die Informationen auf dieser Webseite dienen ausschließlich zu Bildungszwecken. Der Konsum von Cannabis kann in Ihrem Land illegal sein. Bitte informieren Sie sich über die geltenden Gesetze und Vorschriften. Diese Informationen stellen keine medizinische Beratung dar. Konsultieren Sie bei gesundheitlichen Fragen einen Arzt. Inhalte sind nur für volljährige Personen bestimmt.</p>
        <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <p>&copy; 2025 Kev's Edibles. Alle Rechte vorbehalten.</p>
        </div>
    </footer>
</body>
</html>
