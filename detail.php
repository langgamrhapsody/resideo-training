<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./css/layout.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <title>Resideo - Beautiful House in Marina</title>
</head>

<body>
    <?php
$keyDetails = [
        ['name' => 'status', 'value' => "Comming Soon"],
        ['name' => 'Property Type', 'value' => "Apartment"],
        ['name' => 'Year Built', 'value' => "1980"],
        ['name' => 'Stories', 'value' => "23"],
        ['name' => 'Room Count', 'value' => "6"],
        ['name' => 'Parking Spaces', 'value' => "2"]
];

$amenities = [
        ['name' => 'Internet', 'img' => "wifi"],
        ['name' => 'Garage', 'img' => "garage"],
        ['name' => 'Air Conditioning', 'img' => "ac"],
        ['name' => 'Dishwasher', 'img' => "dishwasher"],
        ['name' => 'Disposal', 'img' => "disposal"],
        ['name' => 'Balcony', 'img' => "balcony"],
        ['name' => 'Gym', 'img' => "gym"],
        ['name' => 'Playground', 'img' => "playground"],
        ['name' => 'Bar', 'img' => "bar"]
];
?>

    <header>
        <!-- Navbar -->
        <?php include_once'navbar.php'; ?>
    </header>
    <main>
        <!-- Featured Agents  -->
        <div class="detail">
            <div class="detail__top container">
                <div class="detail__header">
                    <div class="detail__row row">
                        <div class="detail__col col-12  col-lg-6">
                            <h3 class="section-title">Beauttiful House in Marina</h3>
                            <p class="section-desc">542 29th Avenue, Marina District, San Fransisco, CA
                                94121</p>
                        </div>
                        <div class="detail__col col-12 col-lg-6">
                            <div class="detail__detail">
                                <p class="detail__detail-price">$5,198,000</p>
                                <p class="detail__detail-detail"> 5 <sub> BD </sub> 4 <sub> BA </sub> 3,945 <sub> SF
                                    </sub>
                                </p>
                                <div class="detail__detail-button-container">


                                    <button class="btn detail__detail-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 576 512">
                                            <path
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg>
                                        <p class="detail__detail-button-desc">Save</p>
                                    </button>
                                    <button class="btn detail__detail-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 448 512">
                                            <path
                                                d="M352 224c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96c0 4 .2 8 .7 11.9l-94.1 47C145.4 170.2 121.9 160 96 160c-53 0-96 43-96 96s43 96 96 96c25.9 0 49.4-10.2 66.6-26.9l94.1 47c-.5 3.9-.7 7.8-.7 11.9c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-25.9 0-49.4 10.2-66.6 26.9l-94.1-47c.5-3.9 .7-7.8 .7-11.9s-.2-8-.7-11.9l94.1-47C302.6 213.8 326.1 224 352 224z" />
                                        </svg>
                                        <p class="detail__detail-button-desc">Share</p>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail__mid">
                <div class="gallery">
                    <div class="gallery__item gallery__item--first" data-fancybox="gallery"
                        data-src="./assets/img/prop-11-1-gallery.jpg">
                        <img src="./assets/img/prop-11-1-gallery.jpg" alt="Gallery image 1" class="gallery__img">
                    </div>
                    <div class="gallery__item gallery__item--second" data-fancybox="gallery"
                        data-src="./assets/img/prop-10-2-big.jpg">
                        <img src="/assets/img/prop-10-2-big.jpg" alt="Gallery image 2" class="gallery__img">
                    </div>
                    <div class="gallery__item gallery__item--third" data-fancybox="gallery"
                        data-src="./assets/img/prop-10-3-big.jpg">
                        <img src="./assets/img/prop-10-3-big.jpg" alt="Gallery image 3" class="gallery__img">
                    </div>
                    <div class="gallery__item gallery__item--fourth" data-fancybox="gallery"
                        data-src="./assets/img/prop-6-3-big.jpg">
                        <img src="./assets/img/prop-6-3-big.jpg" alt="Gallery image 4" class="gallery__img">
                    </div>
                    <div class="gallery__item gallery__item--fifth" data-fancybox="gallery"
                        data-src="./assets/img/prop-11-3-big.jpg">
                        <img src="./assets/img/prop-11-3-big.jpg" alt="Gallery image 5" class="gallery__img">
                    </div>

                </div>
                <div class="gallery__button">
                    <button data-fancybox-trigger="gallery" data-fancybox-index="0" id="view-gallery"
                        class="btn gallery__button-item">View Photos</button>
                </div>
            </div>
            <div class="detail__bottom container">
                <div class="detail__row-bottom row">
                    <div class="detail__right col-12 col-md-3 col-lg-4">
                        <div class="detail__right-content">
                            <h5 class="detail__right-content-title">Listed By</h5>
                            <div class="detail__right-row row">
                                <div class="detail__right-col col-12 col-sm-8 col-lg-4">
                                    <div class="detail__right-content-agent">
                                        <img class="detail__right-content-agent-img" src="./assets/img/agent-4.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="detail__right-col col-12 col-sm-8 col-lg-7">
                                    <p class="detail__right-content-agent-name">Erika Tillman</p>
                                    <div class="detail__right-content-agent-rating">
                                        <?php for ($stars = 1; $stars <= 5; $stars++) {
                                            echo '<svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>';
                                        } ?>
                                    </div>
                                    <p class="detail__right-content-agent-email">erika.tillman@resideo.com</p>
                                    <div class="detail__right-content-agent-phone">
                                        <svg class="detail__right-content-agent-icon" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                        </svg>
                                        <p class="detail__right-content-agent-number">(789) 456-7890</p>
                                    </div>
                                </div>
                            </div>
                            <div class="detail__right-content-button-row row ">
                                <div class="detail__right-content-button-col col-12 col-sm-8 col-md-12 col-lg-6">
                                    <button class="btn detail__right-content-button">Contact Agent</button>
                                </div>
                                <div class="detail__right-content-button-col col-12 col-sm-8 col-md-12 col-lg-6">
                                    <button class="btn detail__right-content-button--secondary">Request Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail__left col-12 col-md-9 col-lg-8">
                        <div class="detail__left-content">
                            <div class="detail__left-key">
                                <h5 class="detail__left-content-title">Key Details</h5>
                                <div class="detail__left-row row row-cols-2">
                                    <?php foreach($keyDetails as $key) : ?>
                                    <div class="detail__left-col col-6">
                                        <div class="detail__left-section">
                                            <p class="detail__left-section-title"><?php echo $key['name']; ?></p>
                                            <p class="detail__left-section-value">
                                                <?php echo $key['value']; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php endforeach ?>

                                </div>
                            </div>
                            <div class="detail__left-overview">
                                <h5 class="detail__left-content-title">Overview</h5>
                                <p id="overview" class="detail__left-content-desc">Lorem, ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit. Officia tenetur quam vel
                                    error! Doloribus neque tenetur ipsum non distinctio! Id, magnam facilis! Sequi, quia
                                    laborum debitis nihil non tenetur magnam. Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Magnam voluptatum voluptatibus debitis ad totam nostrum quas
                                    repellendus. Ipsa laborum id dicta maiores ducimus expedita assumenda! Doloremque
                                    esse dignissimos ut alias! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Cumque veniam error sit, ipsam totam commodi? Iste maiores, recusandae incidunt,
                                    corporis porro eligendi magni, veniam accusantium aspernatur nemo temporibus
                                    explicabo quam!</p>

                                <button id="readmore" class="btn detail__left-content-button">More
                            </div>
                            <div class="detail__left-amenities">
                                <h5 class="detail__left-content-title">Amenities</h5>
                                <div class="detail__left-row row row-cols-2">
                                    <?php foreach($amenities as $amenity) : ?>
                                    <div class="detail__left-col col-4">
                                        <div class="detail__left-section">
                                            <img class="detail__left-section-svg"
                                                src="<?php echo "./assets/svg/" . $amenity['img'] . ".svg"; ?>"
                                                alt="<?php echo $amenity['img']; ?>">
                                            <p class="detail__left-section-name">
                                                <?php echo $amenity['name']; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <div class="detail__left-area">
                                <h5 class="detail__left-content-title">Explore the Area</h5>
                                <div class="detail__left-area-button">
                                    <button class="btn area">Transportaion</button>
                                    <button class="btn area">Restaurant</button>
                                    <button class="btn area">Shopping</button>
                                    <button class="btn area">Cafes & Bar</button>
                                    <button class="btn area">Arts & Entertainment</button>
                                    <button class="btn area">Fitness</button>
                                </div>
                                <iframe class="detail__left-area-map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1041217723973!2d115.23787957502128!3d-8.68164788840348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1685931131734!5m2!1sen!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                            <div class="detail__left-payment">
                                <h5 class="detail__left-content-title">Payment Calculator</h5>
                                <div class="detail__left-payment-row row">
                                    <div class="detail__left-payment-col col-12 col-sm-4">
                                        <div class="chart">
                                            <canvas id="myChart" class="chart__item">
                                            </canvas>
                                        </div>
                                        <div class="chart__details">
                                            <p class="chart__details-value">$26,669</p>
                                            <p class="chart__details-desc">per month</p>
                                        </div>
                                    </div>
                                    <div class="detail__left-payment-col col-12 col-sm-8">
                                        <div class="payment">
                                            <div class="payment__list">
                                                <div class="payment__list-title">
                                                    <span class="payment__list-title-symbol--interest"></span>
                                                    <p class="payment__list-title-name">Principal and Interest</p>
                                                </div>
                                                <p class="payment__list-value">$23,565</p>
                                            </div>
                                            <div class="payment__list">
                                                <div class="payment__list-title">
                                                    <span class="payment__list-title-symbol--taxes"></span>
                                                    <p class="payment__list-title-name">Property Taxes</p>
                                                </div>
                                                <p class="payment__list-value">$1,068</p>
                                            </div>
                                            <div class="payment__list">
                                                <div class="payment__list-title">
                                                    <span class="payment__list-title-symbol--dues"></span>
                                                    <p class="payment__list-title-name">HOA Dues</p>
                                                </div>
                                                <p class="payment__list-value">$2,036</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail__left-payment-row--input row row-cols-2">
                                    <div class="detail__left-payment-col col-6">
                                        <div class="payment">
                                            <label class="payment__label">Term</label>
                                            <select class="payment__input--select"></select>
                                        </div>
                                    </div>
                                    <div class="detail__left-payment-col col-6">
                                        <div class="payment">
                                            <label class="payment__label">Interest</label>
                                            <input class="payment__input" type="text">
                                        </div>
                                    </div>
                                    <div class="detail__left-payment-col col-6">
                                        <div class="payment">
                                            <label class="payment__label">Home Price</label>
                                            <input class="payment__input" type="text">
                                        </div>
                                    </div>
                                    <div class="detail__left-payment-col col-6">
                                        <div class="payment">
                                            <label class="payment__label">Down Payment</label>
                                            <div class="payment__row">
                                                <input class="payment__input-downpayment--left" type="text">
                                                <input class="payment__input-downpayment--right" type="text">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="detail__left-school">
                                <h5 class="detail__left-content-title">Schools in Marina District</h5>
                                <div class="detail__left-school">
                                    <div class="school-button-container">
                                        <button
                                            class="btn detail__left-school-button school-button-active ">Elementary</button>
                                        <button class="btn detail__left-school-button ">Middle</button>
                                        <button class="btn detail__left-school-button ">High</button>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col-6">School</th>
                                                <th scope="col-1">Type</th>
                                                <th scope="col-1">Grades</th>
                                                <th scope="col-4">Rating</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Harvest Collegiate High School</td>
                                                <td>Public</td>
                                                <td>9-11</td>
                                                <td>5/5 <div class="ratings">
                                                        <?php for ($stars = 1; $stars <= 5; $stars++) {
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>';
                                                    } ?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Harvest Collegiate High School</td>
                                                <td>Public</td>
                                                <td>9-11</td>
                                                <td>5/5
                                                    <div class="ratings">
                                                        <?php for ($stars = 1; $stars <= 5; $stars++) {
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>';
                                                    } ?>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include_once'mainFooter.php'; ?>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="./js/layout.js"></script>
    <script src="./js/swiper.js"></script>
    <script src="./js/chart.js"></script>
    <script>
    Fancybox.bind('[data-fancybox="gallery"]', {});
    </script>

</body>

</html>