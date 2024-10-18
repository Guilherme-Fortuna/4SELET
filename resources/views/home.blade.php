<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://stijndv.com">
    <link rel="stylesheet" href="https://stijndv.com/fonts/Eudoxus-Sans.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite([
    'resources/sass/app.scss',
    'resources/js/app.js',
    'resources/css/app.css',
])
    <title>4Selet - Furniture Website (Avaliação)</title>
</head>

<body onload="document.body.style.opacity='1'">

    <x-navbar />

    <x-heading />

    <x-benefits />

    <x-products-presentation />
    <!-- Our product section -->
    <x-our-product />

    <x-testimonials />

    <x-testimonials-carousel />

    <x-articles />
</body>
    <footer>
        <x-footer />
    </footer>


</html>
