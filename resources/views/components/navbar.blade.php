<div class="border-bottom">
    <nav class="container navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{ asset('/assets/logo.png') }}" alt="Lalasia Logo"><span
                    class="">Lalasia</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a class="navbar-brand" href="#">
                        <img class="img-fluid" src="{{ asset('/assets/logo.png') }}" alt="Lalasia Logo"><span
                            class="fw-bold">Lalasia</span></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>

                    </ul>
                    <div class="nav-btn align-content-center">
                        <a href="#" class="me-3">
                            <!-- BAG2 SVG -->
                            <svg width="30PX" height="30px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 11C15.5523 11 16 10.5523 16 10C16 9.44771 15.5523 9 15 9C14.4477 9 14 9.44771 14 10C14 10.5523 14.4477 11 15 11Z"
                                    fill="#000" />
                                <path
                                    d="M10 10C10 10.5523 9.55228 11 9 11C8.44771 11 8 10.5523 8 10C8 9.44771 8.44771 9 9 9C9.55228 9 10 9.44771 10 10Z"
                                    fill="#000" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.25 5.27567V5C8.25 2.92893 9.92893 1.25 12 1.25C14.0711 1.25 15.75 2.92893 15.75 5V5.27567C16.4084 5.29605 16.9947 5.33261 17.5149 5.39818C18.7162 5.54961 19.6886 5.8682 20.4397 6.6018C20.6903 6.84656 20.9131 7.1183 21.1039 7.41205C21.676 8.29247 21.7977 9.30842 21.7106 10.516C21.6254 11.6979 21.3286 13.1818 20.952 15.0648L20.9328 15.1604C20.6715 16.4673 20.4635 17.5074 20.2061 18.3256C19.941 19.1683 19.6025 19.8497 19.0361 20.4017C18.8414 20.5915 18.6306 20.7643 18.4063 20.918C17.754 21.3651 17.0194 21.5634 16.1411 21.6581C15.2883 21.75 14.2276 21.75 12.8948 21.75H11.1053C9.77249 21.75 8.71181 21.75 7.85904 21.6581C6.98068 21.5634 6.24614 21.3651 5.59385 20.918C5.3695 20.7643 5.15877 20.5915 4.96399 20.4017C4.39766 19.8497 4.05914 19.1683 3.79405 18.3256C3.53667 17.5074 3.32867 16.4673 3.06729 15.1604L3.04822 15.065C2.67158 13.1819 2.37478 11.698 2.28954 10.516C2.20244 9.30842 2.32415 8.29247 2.89619 7.41205C3.08705 7.1183 3.30982 6.84656 3.56044 6.6018C4.31157 5.8682 5.28392 5.54961 6.48518 5.39818C7.00535 5.33261 7.59162 5.29605 8.25 5.27567ZM9.75 5C9.75 3.75736 10.7574 2.75 12 2.75C13.2426 2.75 14.25 3.75736 14.25 5V5.2522C13.8258 5.24999 13.378 5.25 12.9055 5.25H11.0946C10.6221 5.25 10.1743 5.24999 9.75 5.2522V5ZM4.60849 7.67491C5.02293 7.27015 5.61646 7.01956 6.67278 6.88641C7.74368 6.75141 9.1623 6.75 11.1486 6.75H12.8515C14.8378 6.75 16.2564 6.75141 17.3273 6.88641C18.3837 7.01956 18.9772 7.27015 19.3916 7.67491C19.5631 7.84238 19.7155 8.02831 19.8461 8.2293C20.1617 8.71507 20.2911 9.34622 20.2145 10.4081C20.1368 11.4847 19.86 12.8761 19.4705 14.8238C19.1987 16.1827 19.0055 17.1434 18.7752 17.8755C18.5498 18.5919 18.3103 19.0145 17.9892 19.3275C17.8559 19.4573 17.7118 19.5755 17.5582 19.6808C17.1884 19.9343 16.7271 20.0863 15.9803 20.1667C15.2173 20.249 14.2374 20.25 12.8515 20.25H11.1486C9.76271 20.25 8.78285 20.249 8.01978 20.1667C7.27307 20.0863 6.81176 19.9343 6.44188 19.6808C6.28838 19.5755 6.1442 19.4573 6.01093 19.3275C5.68979 19.0145 5.45028 18.5919 5.22492 17.8755C4.99463 17.1434 4.80147 16.1828 4.52967 14.8238C4.14013 12.8761 3.8633 11.4847 3.78565 10.4081C3.70906 9.34622 3.83838 8.71507 4.15401 8.2293C4.2846 8.02831 4.43702 7.84238 4.60849 7.67491Z"
                                    fill="#000" />
                            </svg>
                        </a>
                        <a href="#">
                            <!-- USER SVG -->
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M20.5899 22C20.5899 18.13 16.7399 15 11.9999 15C7.25991 15 3.40991 18.13 3.40991 22"
                                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
