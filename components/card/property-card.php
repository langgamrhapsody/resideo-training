<?php foreach($properties as $property) : ?>
<div class="property__body-content-item col-12 col-sm-6 col-md-12 col-lg-6 ">
    <a href="/detail.php" class="property-card">
        <div id="property-card" class="property-card__image-container">
            <img class="ratio-item" src="<?php echo $property['img']; ?>" alt="<?php echo $property['name']; ?>">
        </div>
        <div class="property-card__desc">
            <p class="property-card__text--title"><?php echo $property['name']; ?>
            </p>
            <p class="property-card__text--price"><?php echo $property['price']; ?>
            </p>
            <p class="property-card__text--attrs"><?php echo $property['detail']; ?>
            </p>
        </div>
    </a>
</div>
<?php endforeach ?>