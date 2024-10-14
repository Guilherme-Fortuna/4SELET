<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://stijndv.com">
        <link rel="stylesheet"
            href="https://stijndv.com/fonts/Eudoxus-Sans.css">
        <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}"
            rel="stylesheet" />
        <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}"
            rel="stylesheet" />
        <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>

        @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',
        'resources/css/app.css',
        ])
        <title>4Selet - Furniture Website (Avaliação)</title>
    </head>

    <script type="text" src="/resources/js/app.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>

    <body>

        <x-header />

        <!-- Welcome section -->
        <div name="Welcome section"
            class="border-bottom">
            <div class>
                <h1>Discover Furniture With</h1>
                <h1>High Quality Wood</h1>
            </div>
            <div class>
                <p2 class>Pellentesque etiam blandit in tincidunt at donec.
                    Eget ipsum dignissim placerat nisi, adipiscing mauris
                    non. Purus parturient viverra nunc, tortor sit laoreet.
                    Quam tincidunt aliquam adipiscing tempor.</p3>
            </div>
            <x-searchbar />
            <div name="image" class>
                <img class="mx-auto" src="{{ asset('/assets/img1.png') }}"
                    alt="Lalasia Logo">

            </div>
        </div>

        <!-- Benefits section -->
        <div name="Benefits section" class>
            <div
                class="grid grid-cols-2 lg:flex-row place-content-around gap-x-60">
                <div class="flex flex-col">
                    <h5 class="text-secondary">Benefits</h5>
                    <h2>Benifits when using our services</h2>
                </div>
                <div class="self-center">
                    <p3>Pellentesque etiam blandit in tincidunt at donec.
                        Eget ipsum dignissim placerat nisi, adipiscing
                        mauris non purus parturient.</p3>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4 col-span-3">
                <div class="flex flex-col col-start-1">
                    <img class="size-16"
                        src="{{ asset('/assets/3square.png') }}"
                        alt="Many Choices">
                    <h3>Many Choices</h3>
                    <p3 class="pt-2">Pellentesque etiam blandit in tincidunt at
                        donec. Eget ipsum dignissim placerat
                        nisi, adipiscing mauris non.</p3>
                </div>

                <div class="col-start-2 my-auto">
                    <img class="size-10"
                        src="{{ asset('/assets/calendar-tick.png') }}"
                        alt="Many Choices">
                    <h3 class="my-2">Fast and On Time</h3>
                    <p3 class>Pellentesque etiam blandit in tincidunt at donec.
                        Eget ipsum dignissim placerat nisi,
                        adipiscing mauris non.</p3>
                </div>

                <div class="col-start-3 "><img class="size-10"
                        src="{{ asset('/assets/money-tick.png') }}"
                        alt="Many Choices">
                    <h3>Affordable Price</h3>
                    <p3 class="pt-4">Pellentesque etiam blandit in tincidunt at
                        donec. Eget ipsum dignissim placerat
                        nisi, adipiscing mauris non.</p3>
                </div>
            </div>
        </div>

        <!-- Our product section -->
        <div name="Our product section" class="py-12">
            <div class="flex flex-col mx-auto text-center">
                <h5 class="text-secondary">Product</h5>
                <h2>Our popular product</h2>
                <p3 class="pt-4">Pellentesque etiam blandit in tincidunt at
                    donec. Eget ipsum dignissim placerat
                    nisi, adipiscing mauris non.</p3>
            </div>
            <h3 class="mx-auto">Implementar carrossel</h3>
        </div>

        <!-- Our product section -->
        <div name="Our product section" class="grid grid-cols-2">
            <div class>
                <h5 class="text-secondary">Our product</h5>
                <h2>Our Product Crafted by talented and high quality
                    material</h2>
                <div class="self-center">
                    <p3>Pellentesque etiam blandit in tincidunt at donec. Eget
                        ipsum dignissim placerat nisi, adipiscing
                        mauris non purus parturient. morbi fermentum, vivamus et
                        accumsan dui tincidunt pulvinar</p3>
                </div>
                <button name="Learn more"
                    class="bg-primary text-white mx-auto px-12 py-4 font-semibold">Learn
                    more</button>
                <img src="{{ asset('/assets/img2.png') }}" alt="Imagem 2">
            </div>

            <div class>
                <div class="grid grid-cols-3 place-items-end">
                    <div name="Years experience" class="mx-auto">
                        <h2>20+</h2>
                        <p3>Years Experience</p3>
                    </div>
                    <div name="Happy clients" class="mx-auto">
                        <h2>483</h2>
                        <p3>Happy Client</p3>
                    </div>
                    <div name="Project finished" class="mx-auto">
                        <h2>150+</h2>
                        <p3>Project Finished</p3>
                    </div>
                </div>
                <img src="{{ asset('/assets/img3.png') }}" alt="Imagem 3" class>
            </div>
        </div>

        <!-- Testimonials section  -->
        <div name="Testimonials section" class="flex flex-col py-12">
            <div class="flex flex-col mx-auto text-center">
                <h5 class="text-secondary">Testimonials</h5>
                <h2>What our customer say</h2>
                <p3 class="pt-4">Pellentesque etiam blandit in tincidunt at
                    donec. Eget ipsum dignissim placerat nisi,
                    adipiscing mauris non.</p3>
            </div>
            <h3 class="mx-auto">Adicionar carrossel de Avaliações</h3>
        </div>

        <!-- Articles section -->
        <div name="Articles section">

        </div>
        <div name="Our product section" class="">
            <div class="">
                <h5 class="text-secondary">Articles</h5>
                <h2>The best furniture comes from Lalasia</h2>
                <div class="">
                    <p3>Pellentesque etiam blandit in tincidunt at donec. </p3>
                </div>
                <h3>Card + carrossel</h3>
            </div>
        </div>

        <x-footer />

    </body>

</html>
