@extends('layouts.app')

@include('includes.farm-nav')

@section('content')
    <section class="md:px-24 px-5 relative w-full h-screen flex flex-col justify-center"
        style="background: url('{{ asset('images/d-natural-farmacy-hero-bg.webp') }}'); background-size: cover; background-position: center center;">
        <div class="md:w-[500px] z-10">
            <h1 data-aos="fade-up" data-aos-duration="1000"
                class="text-5xl text-center md:text-left font-bold leading-[60px] z-10 text-white">
                Harvesting Nature's Bounty, Nurturing Health
            </h1>

            <p data-aos="fade-up" data-aos-duration="1000"
                class="tet-white text-center md:text-left font-medium text-white mt-8 mb-6">
               From farm to table, we bring you the freshest, healthiest produce and livestock, cultivated with care and sustainability at the heart of everything we do.
            </p>

            <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center md:justify-start">
                <a href="/" class="flex text-[#667d5c] gap-0 items-center bg-[#DAE8D4] rounded-lg w-fit px-6 py-2">
                    <p>Learn More</p>
                    <i class="ri-arrow-right-s-line mt-1"></i>
                </a>
            </div>
        </div>
        <div class="bg-black w-full h-screen absolute top-0 z-0 left-0 opacity-70"></div>
    </section>

    <section class="md:px-24 px-5 w-full py-28 bg-slate-50 flex flex-col md:flex-row gap-16">
        <div data-aos="fade-up" data-aos-duration="1000" class="md:w-1/2">
            <img src="{{ asset('images/about-2.webp') }}" alt="">
        </div>

        <div class="md:w-1/2">
            <h1 data-aos="fade-up" data-aos-duration="1000" class="text-4xl font-bold mb-6 text-center md:text-left">About
                Us</h1>
            <p data-aos="fade-up" data-aos-duration="1000" class="text-lg leading-8 mb-4 text-center md:text-left">At
                At The Natural Gardens and Farms, we are committed to sustainable and innovative agricultural practices that ensure the highest quality products for our customers. Nestled in nature's embrace, our farm thrives on a deep respect for the environment, animals, and the communities we serve.
            </p>
            <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center md:justify-start">
                <a href="/" class="flex text-white gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                    <p>Learn More</p>
                    <i class="ri-arrow-right-s-line mt-1"></i>
                </a>
            </div>
            <img data-aos="fade-up" data-aos-duration="1000" src="{{ asset('images/about.webp') }}" class="mt-10"
                alt="">
        </div>
    </section>

    <section class="md:px-24 px-5 w-full pb-28 bg-slate-50 flex flex-col md:flex-row gap-4">
        <div class="md:w-[40%]">
            <h1 class="text-4xl font-bold mb-6 text-center md:text-left">Our Services</h1>
        </div>

        <div class="w-full flex">
            
        </div>
        
    </section>
@endsection()
