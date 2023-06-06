<?php
$agents = [
        ['name' => 'Scott Baldwin', 'number' => "(789) 123-4560", 'img' => 'agent-1'],
        ['name' => 'Alayna Becker', 'number' => "(890) 456-1237", 'img' => 'agent-2'],
        ['name' => 'Melvin Blackwell', 'number' => "(456) 123-7890", 'img' => 'agent-3'],
        ['name' => 'Erika Tillman', 'number' => "(123) 456-7890", 'img' => 'agent-4'],
    ]
?>

<div class="featured-agents">
    <div class="featured-agents__container container">
        <div class="featured-agents__content">
            <h3 class="featured-agents__content-title">Our Featured Agents</h3>
            <p class="featured-agents__content-desc">Meet the best real estate agents</p>
            <div class="featured-agents__content-row row">
                <?php
                foreach($agents as $agent) : ?>
                <div class="featured-agents__content-item col-10 col-sm-6 col-lg-3">
                    <div class="featured-agents__content-item-card">
                        <img class="featured-agents__content-item-card-img--first"
                            src="<?php echo "./assets/img/" . $agent['img'] . ".jpg"; ?>" alt=" agent-1">
                        <a href="#" class="btn featured-agents__content-item-card-agent">
                            <p class="agent-name"><?php echo $agent['name']; ?></p>
                            <div class="agent-contact">
                                <svg class="agent-contact__icon" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg>
                                <p class="agent-contact__number"><?php echo $agent['number']; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <a href="#" class="btn section-button--agents">See all agents</a>
            </a>
        </div>
    </div>
</div>