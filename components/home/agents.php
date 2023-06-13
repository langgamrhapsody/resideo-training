<div class="featured-agents">
    <div class="featured-agents__container container">
        <div class="featured-agents__content">
            <h2 class="section-title">Our Featured Agents</h2>
            <p class="section-desc">Meet the best real estate agents</p>
            <div class="featured-agents__content-row row">
                <?php
                foreach($agents as $agent) : ?>
                <div class="featured-agents__content-item col-10 col-sm-6 col-lg-3">
                    <a href="#" class="agent-card">
                        <div class="agent-card__image-container">

                            <img class="ratio-item agent-card__image" src="<?php echo $agent['img']; ?>"
                                alt="<?php echo $agent['name']?>">
                        </div>
                        <div class="btn agent-card__info">
                            <p class="agent-card__info-name"><?php echo $agent['name']; ?></p>
                            <div class="agent-card__info-contact">
                                <svg class="agent-card__info-contact-icon" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg>
                                <p class="agent-card__info-contact-number"><?php echo $agent['number']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach ?>
            </div>
            <a href="#" class="btn section-button featured-agents__button">See all agents</a>
            </a>
        </div>
    </div>
</div>