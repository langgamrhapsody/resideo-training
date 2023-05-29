<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./css/layout.css" rel="stylesheet">
    <title>Resideo.</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <?php include_once'navbar.php'; ?>

        <!-- Hero -->

    </header>
    <main>
        <?php include_once'fifth.php'; ?>

    </main>
    <footer>
        <?php include_once'footer.php'; ?>

    </footer>

    <script>
    const nav = document.querySelector('.navbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 64) {
            nav.classList.add('navbar__scrolled')
        } else if (window.scrollY < 64) {
            nav.classList.remove('navbar__scrolled')
        }
    })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/tilt.js@1.1.21/dest/tilt.jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>