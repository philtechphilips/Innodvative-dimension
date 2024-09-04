<div class="w-full md:px-20 px-5 flex items-center h-12 bg-gray-900">
    <p id="rotating-text" class="text-white transition-opacity duration-1000 opacity-100">We grow your food naturally with
        fairness and care</p>
</div>

<header
    class="hidden sticky bg-white z-[100000] top-0 md:px-12 px-5 w-full md:flex items-center justify-between py-5 max-h-20">
    <a href="/">
        <img src="{{ asset('images/d-natural-farmacy-logo.jpg') }}" class="w-20" alt="">
    </a>

    <ul class="flex items-center gap-12">
        <li class="text-[#141D38] hover:text-primary font-semibold">
            <a href="/">Home</a>
        </li>

        <li class="text-[#141D38] hover:text-primary font-semibold">
            <a href="/#about">About us</a>
        </li>

        <li class="text-[#141D38] relative cursor-pointer flex items-center font-semibold" onclick="toggleDropdown()">
            <p>Our Companies</p>
            <i class="ri-arrow-drop-down-line text-2xl mt-1"></i>
            <div id="dropdownMenu"
                class="bg-white p-5 absolute top-10 w-60 flex flex-col gap-4 opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out">
                <a href="/natural-farmacy.html">The Natural Farmacy</a>
                <a href="/natural-garden.html">The Natural Gardens and Farms</a>
            </div>
        </li>

        <li class="text-[#141D38] hover:text-primary font-semibold">
            <a href="#services">Our Services</a>
        </li>
        <li class="text-[#141D38] hover:text-primary font-semibold">
            <div class="flex cursor-pointer text-white gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                <p>+234 701 617 6829</p>
            </div>
        </li>
    </ul>
</header>
<header class="md:px-24  sticky bg-white z-[10000] top-0 px-5 w-full flex md:hidden items-center justify-between py-5">
    <a href="/">
        <img src="{{ asset('images/d-natural-farmacy-logo.jpg') }}" class="w-24" alt="">
    </a>

    <i class="ri-menu-fill text-3xl menuButton"></i>
</header>

<nav id="menu"
    class="w-full  z-[999999] p-5 md:hidden bg-white h-screen fixed top-0 left-0 translate-x-[500px] duration-[300ms] ease-in transform">
    <div class="flex items-center justify-between mb-20">
        <a href="/">
            <img src="{{ asset('images/d-natural-farmacy-logo.jpg') }}" alt="" class="w-24">
        </a>

        <div class="w-10 h-10 menuButton flex items-center justify-center">
            <i class="ri-close-line text-3xl"></i>
        </div>
    </div>

    <ul class="flex flex-col gap-12 items-center list">
        <li>
            <a href="/" class=" font-medium text-xl text-[#434343] leading-6 py-2"> Home</a>
        </li>

        <li>
            <a href="#about" class=" font-medium text-xl text-[#434343] leading-6 py-2">About us</a>
        </li>

        <li>
            <a href="#services" class=" font-medium text-xl text-[#434343] leading-6 py-2">Services</a>
        </li>

        <li>
            <a href="/natural-farmacy.html" class=" font-medium text-xl text-[#434343] leading-6 py-2">The Natural
                Farmacy</a>

        </li>


        <li>
            <a href="/natural-garden.html" class=" font-medium text-xl text-[#434343] leading-6 py-2">The Natural
                Gardens and Farms</a>
        </li>

        <li class="flex gap-2 items-center rounded-lg px-6 py-3">
            <a href="tel:+2347016176829">
                <div class="flex cursor-pointer text-white gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                    <p>+2347016176829</p>
                </div>
            </a>
        </li>
    </ul>

</nav>
