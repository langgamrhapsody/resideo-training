<div class="featured-properties">
    <div class="featured-properties__container container">
        <div class="featured-properties__content">
            <h1 class="section-title">Featured Properties</h1>
            <p class="section-desc">Browse our latest hot offers</p>
            <div class="featured-properties__content-row row ">
                <?php foreach($properties as $property) : ?>
                <div class="featured-properties__content-item col-10 col-sm-6 col-lg-4">
                    <a href="/detail.php" class="property-card">
                        <div class="property-card__image-container">
                            <img class="ratio-item property-card__img" src="<?php echo $property['img']; ?>"
                                alt="<?php echo $property['name']; ?>">
                        </div>
                        <div class="property-card__desc">
                            <p class="property-card__text--title"><?php echo $property['name']; ?></p>
                            <p class="property-card__text--price"><?php echo $property['price']; ?></p>
                            <p class="property-card__text--attrs"><?php echo $property['detail']; ?></p>
                        </div>
                    </a>
                </div>
                <?php endforeach ?>
            </div>
            <a href="" class="btn section-button featured-properties__button">browse all</a>
            </a>
        </div>

    </div>

</div>