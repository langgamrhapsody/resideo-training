<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once './stylesheets/globalStylesheet.php'; ?>
    <link href="./assets/css/pages/contact.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Resideo - Contact Us</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <?php include_once 'components/navbar/navbar.php'; ?>
    </header>
    <main>
        <!-- Featured Agents  -->
        <div class="contact-us">
            <div class="contact-us__top container">
                <div class="contact-us__content">
                    <h1 class="section-title">Contact Us</h1>
                    <p class="section-desc">Say hello. Tell us how we can guide you</p>
                </div>
            </div>
            <div class="contact-us__mid">
                <div class="container">
                    <div class="contact-us__mid-card">
                        <h2 class="contact-us__mid-card-title">Our Offices</h2>
                        <div class="contact-us__mid-card-row row">
                            <div class="contact-us__mid-card-col col-6 col-md-3">
                                <div class="contact-us__mid-card-content">
                                    <h3 class="contact-us__mid-card-content-title">Los Angeles</h3>
                                    <p class="contact-us__mid-card-content-address">90 Fifth Avenuee, 3rd Floor Los
                                        Angeles,
                                        CA 1980</p>
                                    <div class="contact-us__mid-card-content-contact">
                                        <p>(123) 789-7390</p>
                                        <p>offce-la@resideo.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-us__mid-card-col col-6 col-md-3">
                                <div class="contact-us__mid-card-content">
                                    <h3 class="contact-us__mid-card-content-title">Los Angeles</h3>
                                    <p class="contact-us__mid-card-content-address">90 Fifth Avenuee, 3rd Floor Los
                                        Angeles,
                                        CA 1980</p>
                                    <div class="contact-us__mid-card-content-contact">
                                        <p>(123) 789-7390</p>
                                        <p>offce-la@resideo.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-us__mid-card-col col-6 col-md-3">
                                <div class="contact-us__mid-card-content">
                                    <h3 class="contact-us__mid-card-content-title">Los Angeles</h3>
                                    <p class="contact-us__mid-card-content-address">90 Fifth Avenuee, 3rd Floor Los
                                        Angeles,
                                        CA 1980</p>
                                    <div class="contact-us__mid-card-content-contact">
                                        <p>(123) 789-7390</p>
                                        <p>offce-la@resideo.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-us__mid-card-col col-6 col-md-3">
                                <div class="contact-us__mid-card-content">
                                    <h3 class="contact-us__mid-card-content-title">Los Angeles</h3>
                                    <p class="contact-us__mid-card-content-address">90 Fifth Avenuee, 3rd Floor Los
                                        Angeles,
                                        CA 1980</p>
                                    <div class="contact-us__mid-card-content-contact">
                                        <p>(123) 789-7390</p>
                                        <p>offce-la@resideo.com</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="contact-us__bottom container">
                <div class="contact-us__row row">
                    <div class="contact-us__right col-12 col-md-6">
                        <div class="contact-us__right-content">
                            <div class="contact-us__right-content-header">
                                <h2 class="contact-us__right-content-title">Our Locations</h2>
                                <select class="contact-us__right-content-select">
                                    <option selected disabled value="">Los Angeles</option>
                                </select>
                            </div>
                            <div class="contact-us__right-content-body">
                                <iframe class="contact-us__right-content-map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1041217723973!2d115.23787957502128!3d-8.68164788840348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1685931131734!5m2!1sen!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="contact-us__left col-12 col-md-6">
                        <div class="contact-us__left-content">
                            <h2 class="contact-us__left-content-title">Send Us A Message</h2>
                            <div class="contact-us__left-content-container">
                                <form class="contact-us__left-content-form">
                                    <input class="contact-us__left-content-input" type="text" name="name" id="name"
                                        placeholder="Name">
                                    <input class="contact-us__left-content-input" type="email" name="email" id="emai"
                                        placeholder="Email">
                                    <select class="contact-us__left-content-select">
                                        <option selected disabled value="">What is this regarding?</option>
                                    </select>
                                    <input class="contact-us__left-content-input" type="text" name="phone" id="phone"
                                        placeholder="Phone (optional)">

                                    <textarea class="contact-us__left-content-textarea" name="message" id="message"
                                        placeholder="Enter your message..."></textarea>

                                </form>
                                <button type="submit" class="btn contact-us__left-content-button"> Send Message</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include_once 'components/footer/mainFooter.php'; ?>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src=" https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="./assets/js/layout.js"></script>
    <script src="./assets/js/navbar.js"></script>


</body>

</html>