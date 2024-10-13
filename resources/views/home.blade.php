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

        @vite('resources/css/app.css')
        <title>4Selet - Furniture Website (Avaliação)</title>
    </head>

    <script type="text" src="/resources/js/app.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>
    <body>
        <div class=" h-full lg:px-48 md:px-24 sm:px-6">
            <div class>
                <x-header />
            </div>
            <!-- Body -->
            <div
                class=" pt-12 place-content-center text-center justify-items-center gap-y-4">
                <div class>
                    <h1>Discover Furniture With</h1>
                    <h1>High Quality Wood</h1>
                </div>
                <div
                    class=" text-paragraph align-middle place-content-center">
                    <p2 class>Pellentesque etiam blandit in tincidunt at donec.
                        Eget ipsum dignissim placerat nisi, adipiscing mauris
                        non. Purus parturient viverra nunc, tortor sit laoreet.
                        Quam tincidunt aliquam adipiscing tempor.</p3>
                </div>
                <x-searchbar />
                <div name="image">
                    <img src="{{ asset('/assets/img1.png') }}" alt="Logo">

                </div>
            </div>
            <div class="">
                <div class="flex flex-col lg:flex-row place-content-around gap-x-96">
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
                        <img class="size-16" src="{{ asset('/assets/3square.png') }}" alt="Many Choices">
                        <h3>Many Choices</h3>
                        <p3 class="pt-2">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p3>
                    </div>

                    <div class="col-start-2 my-auto">
                        <img class="size-10" src="{{ asset('/assets/calendar-tick.png') }}" alt="Many Choices">
                        <h3 class="my-2">Fast and On Time</h3>
                        <p3 class="">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p3>
                    </div>

                    <div class="col-start-3 "><img class="size-10" src="{{ asset('/assets/money-tick.png') }}" alt="Many Choices">
                        <h3>Affordable Price</h3>
                        <p3 class="pt-4">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p3></div>
                </div>

                <div class="pt-12">
                    <div class="flex flex-col place-content-center text-center">
                        <h5 class="text-secondary">Product</h5>
                        <h2>Our popular product</h2>
                        <p3 class="pt-4">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p3></div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
