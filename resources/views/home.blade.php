<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://stijndv.com">
        <link rel="stylesheet"
            href="https://stijndv.com/fonts/Eudoxus-Sans.css">

        @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',
        'resources/css/app.css',
        ])
        <title>4Selet - Furniture Website (Avaliação)</title>
    </head>

    <script type="text" src="/resources/js/app.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>

    <body class>
        <x-header />

        <!-- Welcome section -->
        <div name="Welcome section"
            class="container body-section text-center py-5">
            <div class="position-relative">
                <h1>Discover Furniture With</h1>
                <h1>High Quality Wood</h1>
                <img class="arrow-spiral"
                    src="{{ asset('/assets/arrow-spiral.png') }}"
                    alt="Arrow Spiral">
            </div>
            <div class="text-center mx-auto">
                <p1 class>Pellentesque etiam blandit in tincidunt
                    at
                    donec. Eget ipsum dignissim placerat nisi,
                    adipiscing mauris non. Purus parturient viverra nunc, tortor
                    sit laoreet. Quam tincidunt aliquam
                    adipiscing tempor.</p1>
            </div>

            <div class="position-relative">
                <x-search-bar />
                <img class="img-fluid" src="{{ asset('/assets/img1.png') }}"
                    alt="Lalasia Logo">

            </div>
        </div>

        <!-- Benefits section -->
        <div name="Benefits section" class="container body-section">
            <div class="row justify-content-between">
                <div class="col-4">
                    <h5 class="text-custom-secondary">Benefits</h5>
                    <h2>Benefits when using our services</h2>
                </div>
                <div class="col-4 align-self-end">
                    <p1>Pellentesque etiam blandit in
                        tincidunt at donec. Eget ipsum dignissim placerat
                        nisi, adipiscing mauris non purus parturient.</p1>
                </div>
            </div>
            <div class="row gap-4">
                <div class="shadow-sm p-4 rounded card-body col-md-3">
                    <img class="img-card-benefits"
                        src="{{ asset('/assets/3square.png') }}"
                        alt="Many Choices">
                    <h3 class="card-title my-2">Many Choices</h3>
                    <p3 class="card-text">Pellentesque etiam blandit in
                        tincidunt at donec. Eget ipsum dignissim placerat nisi,
                        adipiscing mauris non.</p3>
                </div>

                <div class="shadow-sm p-4 rounded card-body col-md-3">
                    <img class="img-card-benefits"
                        src="{{ asset('/assets/calendar-tick.png') }}"
                        alt="Fast and On Time">
                    <h3 class="card-title my-2">Fast and On Time</h3>
                    <p3 class="card-text">Pellentesque etiam blandit in
                        tincidunt at donec. Eget ipsum dignissim placerat nisi,
                        adipiscing
                        mauris non.</p3>
                </div>

                <div class="shadow-sm p-4 rounded card-body col-md-3">
                    <img class="img-card-benefits"
                        src="{{ asset('/assets/money-tick.png') }}"
                        alt="Affordable Price">
                    <h3 class="card-title my-2">Affordable Price</h3>
                    <p3 class="card-text">Pellentesque etiam blandit in
                        tincidunt at donec. Eget ipsum dignissim placerat nisi,
                        adipiscing mauris non.</p3>
                </div>
            </div>

        </div>

        <!-- Our product section -->
        <div name="Our product section"
            class="py-5 text-center container body-section">
            <h5 class="text-custom-secondary">Product</h5>
            <h2>Our popular product</h2>
            <p3 class="pt-4">Pellentesque etiam blandit in tincidunt at donec.
                Eget ipsum dignissim placerat nisi, adipiscing
                mauris non.</p3>
            <h3>Implementar carrossel</h3>
        </div>

        <!-- Our product section -->
        <div class="container body-section">
            <div name="Our product section" class="row">
                <div class="col-md-6">
                    <h5 class="text-custom-secondary">Our product</h5>
                    <h2>Our Product Crafted by talented and high quality
                        material</h2>
                    <p3>Pellentesque etiam blandit in tincidunt at donec. Eget
                        ipsum
                        dignissim placerat nisi, adipiscing mauris
                        non purus parturient. morbi fermentum, vivamus et
                        accumsan
                        dui tincidunt pulvinar.</p3>
                    <button name="Learn more"
                        class="btn btn-primary px-5 py-3">Learn more</button>
                    <img src="{{ asset('/assets/img2.png') }}" alt="Imagem 2"
                        class="img-fluid mt-3">
                </div>

                <div class="col-md-6 text-center">
                    <div class="row">
                        <div class="col">
                            <h2>20+</h2>
                            <p>Years Experience</p>
                        </div>
                        <div class="col">
                            <h2>483</h2>
                            <p>Happy Client</p>
                        </div>
                        <div class="col">
                            <h2>150+</h2>
                            <p>Project Finished</p>
                        </div>
                    </div>
                    <img src="{{ asset('/assets/img3.png') }}" alt="Imagem 3"
                        class="img-fluid mt-3">
                </div>
            </div>
        </div>

        <!-- Testimonials section -->
        <div name="Testimonials section" class="py-5 text-center">
            <h5 class="text-custom-secondary">Testimonials</h5>
            <h2>What our customer say</h2>
            <p3 class="pt-4">Pellentesque etiam blandit in tincidunt at donec.
                Eget ipsum dignissim placerat nisi, adipiscing
                mauris non.</p3>
            <h3>Adicionar carrossel de Avaliações</h3>
        </div>

        <!-- Articles section -->
        <div name="Articles section" class="py-5 text-center">
            <h5 class="text-custom-secondary">Articles</h5>
            <h2>The best furniture comes from Lalasia</h2>
            <p3>Pellentesque etiam blandit in tincidunt at donec.</p3>
            <h3>Card + carrossel</h3>
        </div>

        <x-footer />

    </body>

</html>
