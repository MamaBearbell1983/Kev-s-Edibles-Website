<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kev's Edibles</title>
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
        .image-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }
        .image-container img {
            width: 100%;
            max-width: 280px;
            height: auto;
            border-radius: 15px;
            box-shadow: 4px 4px 15px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .image-container img:hover {
            transform: scale(1.08);
            box-shadow: 6px 6px 20px rgba(0,0,0,0.4);
        }
        .brown-section {
            background: #a67b5b;
            padding: 50px 20px;
            border-radius: 10px;
            margin-top: 40px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            color: #c4a484;
        }
        .cta-button {
            background: #2f2f2f;
            color: #c4a484;
            padding: 12px 24px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            transition: background 0.3s ease-in-out;
        }
        .cta-button:hover {
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
        🌿 Kev's Edibles - Cannabis & Hash Rezepte 🌿
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="rezepte.php">Rezepte</a>
        <a href="info.php">Wirkung & Dosierung</a>
        <a href="blog.php">Blog</a>
    </nav>

    <div class="container">
        <h2>Willkommen bei Kev's Edibles!</h2>
        <p>Entdecke köstliche Cannabis- und Hasch-Rezepte für deine kulinarischen Abenteuer. 🌿✨</p>
        <a href="rezepte.php" class="cta-button">Rezepte entdecken</a>
    </div>

    <div class="image-container">
        <a href="rezepte.php"><img src="hash-brownie.jpg" alt="Hash Brownie"></a>
        <a href="rezepte.php"><img src="cannabis-cookies.jpg" alt="Cannabis Cookies"></a>
        <a href="rezepte.php"><img src="cannabis-butter.jpg" alt="Cannabis Butter"></a>
    </div>

    <div class="brown-section">
        <h3>Wusstest du schon?</h3>
        <p>Cannabis-Edibles haben eine längere Wirkung als Rauchen und bieten eine gesündere Alternative! 🌱</p>
    </div>
    <footer>
   
    
    <p><strong>Disclaimer:</strong> Die Informationen auf dieser Webseite dienen ausschließlich zu Bildungszwecken. Der Konsum von Cannabis kann in Ihrem Land illegal sein. Bitte informieren Sie sich über die geltenden Gesetze und Vorschriften. Diese Informationen stellen keine medizinische Beratung dar. Konsultieren Sie bei gesundheitlichen Fragen einen Arzt. Inhalte sind nur für volljährige Personen bestimmt.</p>
    <div class="social-icons">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>
    <p>&copy; 2025 Kev's Edibles. Alle Rechte vorbehalten.</p>
    </footer>
</body>
</html>



