<div name="Header section" id="header" class="container border-bottom">
    <div class="row align-items-end py-3">
        <div class="col-6 col-md-4 d-flex align-items-center">
            <a href="#" class="logo-text d-flex align-items-center">
                <img src="{{ asset('/assets/logo.png') }}" class="logo-image" alt="Lalasia Logo">
                <span class="">Lalasia</span>
            </a>
        </div>


        <div class="col-6 d-md-none text-end">
            <button class="btn btn-offcanvas text-black fs-3 icon-link-hover" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                &#9776; <!-- Hamburger Icon -->
            </button>
        </div>

        <!-- Buttons header - visible in large screens only -->
        <div name="Buttons header" class="col-md-4 text-center d-none d-md-block header-buttons-center">
            <a href="#" class="me-3">Product</a>
            <a href="#" class="me-3">Services</a>
            <a href="#" class="me-3">Article</a>
            <a href="#">About Us</a>
        </div>

        <!-- Icons header - visible in large screens only -->
        <div class="col-md-4 text-end d-none d-md-block header-buttons-end">
            <a href="#" class="me-3">iBAG2</a>
            <a href="#">iUSER</a>
        </div>
    </div>

    <!-- Offcanvas menu for small screens -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header border-bottom">
            <img src="{{ asset('/assets/logo.png') }}" class="logo-image">
            <p class="logo-text mb-0 ms-2">Lalasia</p>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body header-buttons-center border-bottom">
            <!-- Buttons header inside offcanvas -->
            <a href="#" class=" d-block mb-3">Product</a>
            <a href="#" class="d-block mb-3">Services</a>
            <a href="#" class="d-block mb-3">Article</a>
            <a href="#" class="d-block pb-3 border-bottom ">About Us</a>
            <!-- Icons header inside offcanvas -->
            <a href="#" class="d-block my-3">iBAG2</a>
            <a href="#" class="d-block">iUSER</a>
        </div>
    </div>
</div>
