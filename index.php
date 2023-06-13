<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once 'stylesheets/stylesheets.php'; ?>
    <link href="./css/pages/home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Resideo.</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <?php include_once 'components/navbar.php'; ?>
    </header>
    <main>
        <!-- hero -->
        <?php include_once 'pages/home/banner.php'; ?>


        <!-- featured properties -->
        <?php include_once 'pages/home/property.php'; ?>


        <!-- why choose us -->
        <?php include_once 'pages/home/advantages.php'; ?>

        <!-- Featured Agents  -->
        <?php include_once 'pages/home/agents.php'; ?>


        <!-- Search Smarter Section -->
        <?php include_once 'pages/home/smarter.php'; ?>

        <!-- modal -->
        <?php include_once 'components/modal.php'; ?>

    </main>
    <footer>
        <?php include_once 'components/mainFooter.php'; ?>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="./js/layout.js"></script>
    <script src="./js/home.js"></script>

</body>

</html>