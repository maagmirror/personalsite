<?php 
$yearsold = (date("Y") - 1999); 
$desc = "im a " . $yearsold . " years old programmer, website developer, and other things with computers, since 1999" ;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maag - Designer - Programmer</title>
    <meta name="description" content="<?php echo $desc ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://maag.nibiru.com.uy/">
    <meta property="og:title" content="Maag - Designer - Programmer">
    <meta property="og:description" content="<?php echo $desc ?>">
    <meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://maag.nibiru.com.uy/">
    <meta property="twitter:title" content="Maag - Designer - Programmer">
    <meta property="twitter:description" content="<?php echo $desc ?>">
    <meta property="twitter:image" content="https://<?php echo $_SERVER['HTTP_HOST'];?>/favicon.png">


    <link rel="shortcut icon" href="./favicon.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body id="index">

    <a href="https://github.com/maagmirror/" target="_blank" id="github" aria-label="View source on GitHub"><svg id="github" width="80" height="80" viewBox="0 0 250 250" aria-hidden="true">
        <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
        <path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" class="octo-arm"></path>
        <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path>
        </svg>
    </a>
    <div class="background">
        <div class="col">
            <div id="photo"></div>
        </div>
        <div class="col">
            <div id="container">
                <div id="headline">
                    <h2>I'm</h2>
                    <h1 class="select">Marcos Antúnez</h1>
                    <div id="social">
                        <a href="https://twitter.com/soymaag" title="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://github.com/maagmirror" title="github" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/maagdesigns/" title="linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <h2 id="username">also known as <span class="select">Maag</span></h2>
                </div>
                <div id="tagline">
                    <h3>Website designer & Programmer</h3>
                </div>
                <div id="clients">
                    <a href="https://nibiru.com.uy" title="nibiru" target="_blank"><img src="./img/nibiru.png"></img></a>
                    <a href="https://pcstore.com.uy" title="pcstore" target="_blank"><img src="./img/pcstore.png"></img></a>
                </div>
                <div id="projects">
                    <a href="https://maagmirror.github.io/TaringaTools/" title="taringa tools" target="_blank"><img src="./img/taringa.png"></img></a>
                    <a href="https://maagdesigns.com.uy" title="maag designs" target="_blank"><img src="./img/logo.png"></img></a>
                </div>
                <div id="disclaimer">
                    <h4>Maag © <?php echo date("Y"); ?>. All rights reserved.</h4>
                    <h4>All trademarks, logos, and company names are the property of their respective owners.</h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>