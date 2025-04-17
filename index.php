<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <link rel="preload" href="/assets/css/style.css" as="style">
    <link rel="preload" href="/assets/js/main.js" as="script">
    
    <title>Главная страница |</title>
    
    <!-- Favicon для всех платформ -->
    <link rel="icon" href="/assets/images/bow.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/bow.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">

    <link rel="stylesheet" href="/assets/css/style.css">
    
    <!-- Микроразметка Schema.org -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Название компании",
        "url": "https://вашсайт.ru",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://вашсайт.ru/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
</head>
<body>
    <a class="skip-link" href="#main-content">Перейти к содержанию</a>
    
    <?php include 'includes/header.php'; ?>
    
    <main id="main-content" class="main-home">
        <section class="hero-section">
            <div class="container">
                <h1 class="main-title">Добро пожаловать!</h1>
                <p class="hero-text">...Our site`s description</p>
                <a href="/about" class="cta-button">Узнать больше</a>
            </div>
        </section>
        
        <section class="features-section">
            <div class="container">
                <h2 class="visually-hidden">Our advantages</h2>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    

    <script src="/assets/js/main.js" defer></script>
</body>
</html>
