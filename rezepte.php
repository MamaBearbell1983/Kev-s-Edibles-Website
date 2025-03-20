<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kev's Edibles - Rezepte</title>
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
        .recipe-card {
            background: #c4a484;
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
            text-align: left;
        }
        .recipe-card h2 {
            text-align: center;
            color: #6b8e23;
        }
        .recipe-card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .recipe-card ul {
            list-style-type: disc;
            margin-left: 20px;
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
         Kev's Edibles - Rezepte 
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="rezepte.php">Rezepte</a>
        <a href="info.php">Wirkung & Dosierung</a>
        <a href="blog.php">Blog</a>
    </nav>
    <div class="container">
        <h1>Unsere leckeren Cannabis-Rezepte</h1>
        <div class="recipe-card">
            <h2>Hasch-Brownies</h2>
            <img src="hash-brownie.jpg" alt="Leckere Cannabis-Brownies">
            <p><strong>Zutaten:</strong></p>
            <ul>
                <li>200g Zartbitterschokolade</li>
                <li>150g Butter</li>
                <li>3 Eier</li>
                <li>150g Zucker</li>
                <li>100g Mehl</li>
                <li>1 TL Backpulver</li>
                <li>1g fein gemahlenes Hasch</li>
            </ul>
            <p><strong>Zubereitung:</strong> Schokolade und Butter schmelzen, Eier und Zucker schaumig schlagen, alle Zutaten vermengen und bei 180°C ca. 25 Minuten backen.</p>
        </div>
        <div class="recipe-card">
            <h2>Cannabis-Kekse</h2>
            <img src="cannabis-cookies.jpg" alt="Frische Cannabis-Kekse">
            <p><strong>Zutaten:</strong></p>
            <ul>
                <li>200g Mehl</li>
                <li>100g Zucker</li>
                <li>1 Ei</li>
                <li>100g Butter</li>
                <li>1 TL Vanillezucker</li>
                <li>1g gemahlenes Cannabis</li>
            </ul>
            <p><strong>Zubereitung:</strong> Alle Zutaten zu einem Teig verkneten, kleine Kekse formen und bei 170°C ca. 15 Minuten backen.</p>
        </div>
        <div class="recipe-card">
            <h2>Cannabis-Butter</h2>
            <img src="cannabis-butter.jpg" alt="Selbstgemachte Cannabis-Butter">
            <p><strong>Zutaten:</strong></p>
            <ul>
                <li>250g Butter</li>
                <li>5g gemahlenes Cannabis</li>
            </ul>
            <p><strong>Zubereitung:</strong> Butter schmelzen, Cannabis hinzufügen und auf niedriger Stufe 2 Stunden köcheln lassen. Durch ein Sieb abseihen und abkühlen lassen.</p>
        </div>
    </div>
    <footer>
       
        
        <p><strong>Disclaimer:</strong> Die Informationen auf dieser Webseite dienen ausschließlich zu Bildungszwecken. Der Konsum von Cannabis kann in Ihrem Land illegal sein. Bitte informieren Sie sich über die geltenden Gesetze und Vorschriften. Diese Informationen stellen keine medizinische Beratung dar. Konsultieren Sie bei gesundheitlichen Fragen einen Arzt. Inhalte sind nur für volljährige Personen bestimmt.</p>
        <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <p>&copy; 2025 Kev's Edibles. Alle Rechte vorbehalten.</p>
        </div>
    </footer>
</body>
</html>