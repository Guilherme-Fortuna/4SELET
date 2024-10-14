<div name="Header section" id="header" class="border-bottom">
    <!-- Ajustar o border para pegar a página inteira assim como no Figma -->
    <div class="grid grid-cols-3 w-full">
        <div class="flex gap-x-2">
            <img src="{{ asset('/assets/logo.png') }}" class="logo-image">
            <p class="logo-text">Lalasia</p>
        </div>

        <div class="header-buttons-center">
            <a href="#" class="font-semibold">Product</a>
            <a href="#" class="font-semibold">Services</a>
            <a href="#" class="font-semibold">Article</a>
            <a href="#" class="font-semibold">About Us</a>
        </div>

        <div class="header-buttons-end">
            <a href="#"><x-solar-bag-5-linear class="h-8" /></a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-exclamation" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5m0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
              </svg></a>
        </div>
    </div>
</div>

