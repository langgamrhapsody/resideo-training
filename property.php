<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once './stylesheets/globalStylesheet.php'; ?>
    <link href="./assets/css/pages/property.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Resideo - Our Properties</title>
</head>

<body>

    <?php include_once "./data/data.php"
    ?>


    <header>
        <!-- Navbar -->
        <?php include_once './components/navbar/navbar.php'; ?>
    </header>
    <main>
        <div class="listing-page">
            <div class="listing-page__row row">
                <div id="property-item" class="listing-page__col--item col-12">
                    <div class="property">
                        <div class="property__container ">
                            <div class="property__header">
                                <div class="property__row row">
                                    <div class="property__col col-3">
                                        <select class="property__header-select">
                                            <option selected value="buy">Buy</option>
                                            <option value="rent">rent</option>
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
                                    <div class="property__col col-4 col-sm-7 col-lg-8">
                                        <h1 class="property__body-header-title">1,684 Results</h1>
                                    </div>
                                    <div class="property__col col-6 col-sm-3">
                                        <select class="property__header-select">
                                            <option selected disabled value="">Sort</option>
                                            <option value="">A-Z</option>

                                            <option value="">Z-A</option>

                                            <option value="">highest price</option>
                                            <option value="">lowest price</option>


                                        </select>
                                    </div>
                                    <div class="property__col col-2 col-lg-1">
                                        <button id="map-button" type="button" class="btn property__header-button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasMap"
                                            aria-controls="offcanvasMap">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M384 476.1L192 421.2V35.9L384 90.8V476.1zm32-1.2V88.4L543.1 37.5c15.8-6.3 32.9 5.3 32.9 22.3V394.6c0 9.8-6 18.6-15.1 22.3L416 474.8zM15.1 95.1L160 37.2V423.6L32.9 474.5C17.1 480.8 0 469.2 0 452.2V117.4c0-9.8 6-18.6 15.1-22.3z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="property__body">
                                <div class="property__body-content-row row ">
                                    <?php include_once "./components/card/property-card.php"; ?>
                                </div>
                                <nav class="property__body-pagination">
                                    <ul>
                                        <li>
                                            <a class="btn pagination">1</a>
                                        </li>
                                        <li>
                                            <a class="btn pagination">2</a>
                                        </li>
                                        <li>
                                            <a class="btn pagination">3</a>
                                        </li>
                                        <li>
                                            <a class="btn pagination">Next</a>
                                        </li>
                                    </ul>

                                </nav>
                            </div>
                        </div>
                        <?php include_once './components/footer/secondaryFooter.php'; ?>

                    </div>
                </div>
                <div class="offcanvas offcanvas-end offcanvas-custom" data-bs-backdrop="false" tabindex="-1"
                    id="offcanvasMap" aria-labelledby="offcanvasRightLabel">
                    <button id="offcanvas-button" type="button" class="btn offcanvas-custom__btn"
                        data-bs-dismiss="offcanvas" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                            <path
                                d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                        </svg>
                    </button>

                    <div id="property-map" class="listing-page__col--map col-12 ">
                        <div class="property-map">
                            <iframe class="property-map__iframe"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1041217723973!2d115.23787957502128!3d-8.68164788840348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1685931131734!5m2!1sen!2sid"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
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

    <script src="./assets/js/layout.js"></script>
    <script src="./assets/js/property.js"></script>

    <script src="./assets/js/property-card.js"></script>


</body>

</html>