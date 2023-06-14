  <?php foreach($properties as $index=>$property) : ?>
  <div class="property-card__container ">
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