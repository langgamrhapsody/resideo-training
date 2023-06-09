<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./css/layout.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Resideo - Our Properties</title>
</head>

<body>

    <?php
    $properties = [
        ['name' => 'Chic Apartment in Downtown', 'price' => "$890,000", 'img' => './assets/img/prop-4-1-gallery.jpg', 'detail' => '2 BD | 2 BA | 920SE'],
        ['name' => 'Villa Luna in Bali', 'price' => "$560,000", 'img' => './assets/img/prop-5-1-gallery.jpg', 'detail' => '1 BD | 1 PP | 312VR'],
        ['name' => 'Hotel Margo in Dubai', 'price' => "$320,000", 'img' => './assets/img/prop-6-1-gallery.jpg', 'detail' => '1 BD | 1 JJ | 111RR'],
        ['name' => 'Prestige House in LI', 'price' => "$1,000,000", 'img' => './assets/img/prop-10-1-gallery.jpg', 'detail' => '3 BD | 3 BA | 1000SE'],
        ['name' => 'Lux Motel in San', 'price' => "$110,000", 'img' => './assets/img/prop-11-1-gallery.jpg', 'detail' => '1 BD | 1 BA | 11BE'],
        ['name' => 'Royal Room in Lux', 'price' => "$200,000", 'img' => './assets/img/prop-12-1-gallery.jpg', 'detail' => '3 BD | 3 BA | 01BE'],
        
    ]
    ?>


    <header>
        <!-- Navbar -->
        <?php include_once 'navbar.php'; ?>
    </header>
    <main>
        <div class="listing-page">
            <div class="listing-page__row row">
                <div class="listing-page__col col-12 col-md-6">
                    <div class="property">
                        <div class="property__container ">
                            <div class="property__header">
                                <div class="property__row row">
                                    <div class="property__col col-3">
                                        <select class="property__header-select">
                                            <option selected disabled value="">Buy</option>
                                        </select>
                                    </div>
                                    <div class="property__col col-7 col-lg-8">
                                        <input class="property__header-input" type="text" name="search" id="search"
                                            placeholder="Search by City, Neighborhood, or Address">
                                    </div>
                                    <div class="property__col col-2 col-lg-1">
                                        <button type="button" class="btn property__header-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                <path
                                                    d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="property__row row">
                                    <div class="property__col col-7 col-lg-8">
                                        <h1 class="property__body-header-title">1,684 Results</h1>
                                    </div>
                                    <div class="property__col col-3">
                                        <select class="property__header-select">
                                            <option selected disabled value="">Sort</option>
                                        </select>
                                    </div>
                                    <div class="property__col col-2 col-lg-1">
                                        <button type="button" class="btn property__header-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                <path
                                                    d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="property__body">
                                <div class="property__body-content-row row row-cols-1 row-cols-lg-2 ">
                                    <?php foreach($properties as $property) : ?>
                                    <div class="property__body-content-item col-12 col-lg-6 ">
                                        <div class="property__body-content-item-card">
                                            <img class="property__body-content-item-card-img"
                                                src="<?php echo $property['img']; ?>"
                                                alt="<?php echo $property['name']; ?>">
                                            <div class="property__body-content-item-card-desc">
                                                <p class="properties__text--title"><?php echo $property['name']; ?></p>
                                                <p class="properties__text--price"><?php echo $property['price']; ?></p>
                                                <p class="properties__text--attrs"><?php echo $property['detail']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                                <div class="property__body-pagination">
                                    <button class="btn">1</button>
                                    <button class="btn">2</button>
                                    <button class="btn">3</button>
                                    <button class="btn">Next</button>
                                </div>
                            </div>
                        </div>
                        <?php include_once 'secondaryFooter.php'; ?>

                    </div>
                </div>
                <div class="listing-page__col col-12 col-md-6">
                    <div class="property-map">
                        <iframe class="property-map__iframe"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1041217723973!2d115.23787957502128!3d-8.68164788840348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1685931131734!5m2!1sen!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>

        </div>

    </main>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src=" https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="./js/layout.js"></script>
    <script src="./js/swiper.js"></script>

</body>

</html>