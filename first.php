<?php
    $properties = [
        ['name' => 'Chic Apartment in Downtown', 'price' => "$890,000", 'img' => 'prop-4-1-gallery', 'detail' => '2 BD | 2 BA | 920SE'],
        ['name' => 'Villa Luna in Bali', 'price' => "$560,000", 'img' => 'prop-5-1-gallery', 'detail' => '1 BD | 1 PP | 312VR'],
        ['name' => 'Hotel Margo in Dubai', 'price' => "$320,000", 'img' => 'prop-6-1-gallery', 'detail' => '1 BD | 1 JJ | 111RR'],
        ['name' => 'Prestige House in LI', 'price' => "$1,000,000", 'img' => 'prop-10-1-gallery', 'detail' => '3 BD | 3 BA | 1000SE'],
        ['name' => 'Lux Motel in San', 'price' => "$110,000", 'img' => 'prop-11-1-gallery', 'detail' => '1 BD | 1 BA | 11BE'],
        ['name' => 'Royal Room in Lux', 'price' => "$200,000", 'img' => 'prop-12-1-gallery', 'detail' => '3 BD | 3 BA | 01BE'],
    ]
    ?>

<div class="hero">
    <div class="hero__container">
        <div class="container">
            <div class="hero__row row">
                <div class="hero__swiper--right col-12 col-md-7 col-lg-6 ">
                    <div class="swiper hero-img-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($properties as $property) : ?>
                            <div class="swiper-slide">
                                <img class="hero-img-swiper__img"
                                    src="<?php echo "./assets/img/" . $property['img'] . ".jpg"; ?>"
                                    alt="<?php echo $property['img']; ?>">
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="hero__swiper--left col-12 col-md-5 col-lg-6">
                    <div class="swiper hero-text-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($properties as $property) : ?>
                            <div class="swiper-slide">
                                <h2 class="hero-text-swiper__title"><?php echo $property['name']; ?></h2>
                                <p class="hero-text-swiper__desc"><?php echo $property['detail']; ?></p>
                                <p class="hero-text-swiper__price"><?php echo $property['price']; ?></p>
                                <a href="/detail.php" class="section-button--hero">View Details</a>
                            </div>
                            <?php endforeach ?>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="hero__swiper-button">
        <div class="hero-swiper-button-prev swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="32" height="32">
                <path fill="currentColor"
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </div>
        <div class="hero-swiper-button-next swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="32" height="32">
                <path fill="currentColor"
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
        </div>
    </div>
</div>