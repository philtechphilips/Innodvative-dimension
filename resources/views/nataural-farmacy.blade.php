@extends('layouts.farmacy-app')

@include('includes.farm-nav')

@section('content')
    <section class="md:px-10 px-5 relative w-full h-screen flex flex-col justify-center"
        style="background: url('{{ asset('images/d-natural-farmacy-hero-bg.webp') }}'); background-size: cover; background-position: center center;">
        <div class="md:w-[500px] z-10">
            <h1 data-aos="fade-up" data-aos-duration="1000"
                class="text-5xl text-center md:text-left font-bold leading-[60px] z-10 text-white">
                Harvesting Nature's Bounty, Nurturing Health
            </h1>

            <p data-aos="fade-up" data-aos-duration="1000"
                class="tet-white text-center md:text-left font-medium text-white mt-8 mb-6">
                From farm to table, we bring you the freshest, healthiest produce and livestock, cultivated with care and
                sustainability at the heart of everything we do.
            </p>

            <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center md:justify-start">
                <a href="https://www.instagram.com/cropappetit?igsh=MXczcHozbmNsdnJtcw==" class="flex text-white gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                    <p>Learn More</p>
                    <i class="ri-arrow-right-s-line mt-1"></i>
                </a>
            </div>
        </div>
        <div class="bg-black w-full h-screen absolute top-0 z-0 left-0 opacity-70"></div>
    </section>

    <section class="md:px-10 px-5 w-full py-28 bg-slate-50 flex flex-col md:flex-row gap-16">
        <div data-aos="fade-up" data-aos-duration="1000" class="md:w-1/2">
            <img src="{{ asset('images/about-2.webp') }}" alt="">
        </div>

        <div class="md:w-1/2">
            <h1 data-aos="fade-up" data-aos-duration="1000" class="text-4xl font-bold mb-6 text-center md:text-left">About
                Us</h1>
            <p data-aos="fade-up" data-aos-duration="1000" class="text-lg leading-8 mb-4 text-center md:text-left">At
                At The Natural Gardens and Farms, we are committed to sustainable and innovative agricultural practices that
                ensure the highest quality products for our customers. Nestled in nature's embrace, our farm thrives on a
                deep respect for the environment, animals, and the communities we serve.
            </p>
            <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center md:justify-start">
                <a href="https://www.instagram.com/cropappetit?igsh=MXczcHozbmNsdnJtcw==" class="flex text-white gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                    <p>Learn More</p>
                    <i class="ri-arrow-right-s-line mt-1"></i>
                </a>
            </div>
            <img data-aos="fade-up" data-aos-duration="1000" src="{{ asset('images/about.webp') }}" class="mt-10"
                alt="">
        </div>
    </section>

    <section class="md:px-10 px-5 w-full pb-28 bg-slate-50 flex flex-col">
        <div class="md:w-[40%]">
            <h1 class="text-4xl font-bold mb-6 text-center md:text-left">Our Services</h1>
        </div>

        <div class="w-full flex md:flex-row flex-col md:gap-10 md:bg-white md:rounded-tr-2xl md:shadow">
            <img src="{{ asset('images/catfish.webp') }}" class="md:w-1/4 md:rounded-tl-2xl" alt="">
            <div class="md:w-1/4 py-10">
                <h1 class="font-bold text-2xl mb-6">Livestock Farming</h1>
                <p class="text-gray-600">
                    We raise free-range chickens and quality catfish, ensuring healthy, natural growth for nutritious meat.
                </p>
            </div>
            <img src="{{ asset('images/chickens-poultry-farm.webp') }}" class="md:w-1/4" alt="">
            <div class="md:w-1/4 py-10">
                <h1 class="font-bold text-2xl mb-6">Poultry Breeding</h1>
                <p class="text-gray-600">
                    Our breeding program produces robust, high-quality birds for both meat and eggs.
                </p>
            </div>
        </div>

        <div class="w-full flex md:flex-row flex-col md:bg-white rounded-br-2xl rounded-bl-2xl md:shadow">
            <div class="md:w-1/4 py-10 md:px-5">
                <h1 class="font-bold text-2xl mb-6">Crop and Vegetable Planting</h1>
                <p class="text-gray-600">
                    We grow a variety of organic crops, including maize, spinach, kale, and bitter leaf, using sustainable
                    farming practices.
                </p>
            </div>

            <img src="{{ asset('images/african-man-harvesting-vegetables.webp') }}" class="md:w-1/4 " alt="">

            <div class="md:w-1/4 py-10 md:px-5">
                <h1 class="font-bold text-2xl mb-6">Crop Spraying</h1>
                <p class="text-gray-600">
                    We use eco-friendly methods to protect our crops, prioritizing natural solutions for a healthier
                    environment.
                </p>
            </div>

            <img src="{{ asset('images/refreshment-from-as-sprinklers-arc-water-geometric-greenery-fields.webp') }}"
                class="md:w-1/4" alt="">
        </div>

    </section>



    <section class="md:px-24 px-5 w-full flex flex-col justify-center h-96 relative overflow-hidden"
        style="background: url('{{ asset('images/about-image.jpg') }}'); background-size: cover; background-position: center center; background-attachment: fixed;">
        <h1 data-aos="fade-up" data-aos-duration="1000" class="tex-xl text-white font-bold text-5xl z-10 text-center">Reach
            Out Today</h1>
        <p data-aos="fade-up" data-aos-duration="1000" class="text-white text-lg z-10 mt-6 text-center">
            Join us in our journey towards a healthier, more sustainable future. Explore our farm and discover the
            difference that natural, ethical farming can make.</p>
        <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center z-10 mt-5">
            <a href="tel:+2347086549580" class="flex text-white z-10 gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                <p>+234 708 654 9580</p>
            </a>
        </div>
        <div class="absolute top-0 left-0 z-0 bg-black h-96 w-full opacity-60"></div>
    </section>

    @include('includes.farm-footer')
@endsection()
