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

<div class="featured-properties">
    <div class="featured-properties__container container">
        <div class="featured-properties__content">
            <h1 class="section-title">Featured Properties</h1>
            <p class="section-desc">Browse our latest hot offers</p>
            <div class="featured-properties__content-row row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                <?php foreach($properties as $property) : ?>
                <div class="featured-properties__content-item col-10 col-sm-6 col-lg-4">
                    <div class="featured-properties__content-item-card">
                        <img class="featured-properties__content-item-card-img" src="<?php echo $property['img']; ?>"
                            alt="<?php echo $property['name']; ?>">
                        <div class="featured-properties__content-item-card-desc">
                            <p class="properties__text--title"><?php echo $property['name']; ?></p>
                            <p class="properties__text--price"><?php echo $property['price']; ?></p>
                            <p class="properties__text--attrs"><?php echo $property['detail']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>


            </div>
            <a href="" class="btn section-button--properties">browse all</a>
            </a>
        </div>
    </div>
</div>