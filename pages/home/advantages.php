<?php
$features = [
    ['name' => 'Find your future home', 'desc' => "We help you find a new home by offering a smart real estate experience", 'img' => './assets/svg/home.svg'],
    ['name' => 'Experienced agents', 'desc' => "Find an agent who knows your market best", 'img' => './assets/svg/shaking-hands.svg'],
    ['name' => 'Buy or rent homes', 'desc' => "Millons of houses and apartments in your favourite cities", 'img' => './assets/svg/kiosk.svg'],
    ['name' => 'I dont know', 'desc' => "blablbala", 'img' => './assets/svg/home.svg'],
]
?>

<div class="choose-us">
    <div class="choose-us__container">
        <div class="container">
            <div class="choose-us__row row">
                <div class="choose-us__content col-12 col-lg-4">
                    <div class="choose-us__content-container">
                        <h2 class="section-title--advantage">Why Choose Us</h2>
                        <p class="section-desc--advantage">We offer perfect real estate service</p>
                        <a href="#" class="btn section-button choose-us__button">learn more</a>
                    </div>
                </div>
                <div class="choose-us__swiper col-12 col-lg-8 ">
                    <div class="swiper choose-us__swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach($features as $feature) : ?>
                            <div class="swiper-slide">
                                <div class="choose-us__swiper-card">
                                    <img src="<?php echo  $feature['img']; ?>" class="choose-us__swiper-card-svg"
                                        alt="<?php echo $feature['name']; ?>">
                                    <h3 class="choose-us__swiper-card-title"><?php echo $feature['name']; ?></h3>
                                    <p class="choose-us__swiper-card-desc">
                                        <?php echo $feature['desc']; ?> </p>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="choose-us__swiper-button">
                        <div class="choose-swiper-button-prev swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="32" height="32">
                                <path fill="currentColor"
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                            </svg>
                        </div>
                        <div class="choose-swiper-button-next swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="32" height="32">
                                <path fill="currentColor"
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>