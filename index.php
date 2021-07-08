<?php 
include __DIR__ . "/classes/movies.php";
include __DIR__ . "/portions/descriptions.php";

$movies = 
[
    $movie1 = new Movies
    (
        "Loki", 
        "Italiano",
        $cast1,
        $description1,
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2HV2ECjopsK_Ct_CVXFuYlPKieHdpUWw9gA&usqp=CAU"
    ),
    
    $movie2 = new Movies
    (
        "Io sono Nessuno",
        "Italiano",
        $cast2,
        $description2,
        "https://movieplayer.net-cdn.it/t/images/2021/06/15/io-sono-nessuno_jpeg_400x0_crop_q85.jpg"
    ),
    $movie3 = new Movies
    (
        "Spiral – L’eredità di Saw",
        "Italiano",
        $cast3,
        $description3,
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLKpV43Td1qI0hU87zlds7E38-f8plOYXxBOOVDSliHT_iEfcZI0NQNPuZ115O0JdK-CU&usqp=CAU"
    )
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <!-- header -->
        <header>
            <h1>Boolflix</h1>
        </header>
        <!-- header -->
    
        <!-- main -->
        <main>

            <!-- section -->
            <section>

                <!-- film-container -->
                <?php foreach ($movies as $movie) { ?>
                    <article>
                        <img src="<?= $movie->image ?>" alt="">
                        <h4><?= $movie->title ?></h4>
                        <h5><?= $movie->language ?></h5>
                        <ul><?= $movie->cast ?></ul>
                        <h5><?= $movie->getLengthtext () ?></h5>
                    </article>
                <?php } ?>
                
                <!-- firlm-container -->

            </section>
            <!-- section -->

        </main>
        <!-- main -->
        
    </body>
</html>