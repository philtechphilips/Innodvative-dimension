@extends('layouts.app')

@section('content')
    <section class="md:px-24 px-5 relative w-full h-screen flex flex-col justify-center"
        style="background: url('{{ asset('images/hero-bg.jpg') }}'); background-size: cover; background-position: center center;">
        <div class="md:w-[500px] z-10">
            <h1 class="text-5xl text-center md:text-left font-bold leading-[60px] z-10 text-white">
                Grow Your Food Naturally with Fairness & Care
            </h1>

            <p class="tet-white text-center md:text-left font-medium text-white mt-8 mb-6">Experience the freshness of farm produce delivered straight
                to your doorstep. Embrace organic living and grow your own food with our commitment to fairness and care.
            </p>

        <div class="flex items-center justify-center md:justify-start">
            <a href="/" class="flex text-white gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                <p>Learn More</p>
                <i class="ri-arrow-right-s-line mt-1"></i>
            </a>
        </div>
        </div>
        <div class="bg-black w-full h-screen absolute top-0 z-0 left-0 opacity-45"></div>
    </section>

    <section class="md:px-24 px-5 w-full py-28 bg-slate-50 flex flex-col md:flex-row gap-16">
        <div class="md:w-1/2">
            <img src="{{ asset('images/433851635_373330142241124_5471280272476323151_n.webp') }}" alt="">
        </div>

        <div class="md:w-1/2">
            <h1 class="text-4xl font-bold mb-6 text-center md:text-left">About Us</h1>
            <p class="text-lg leading-8 mb-4 text-center md:text-left">At International Dimension Limited, we are dedicated to improving lives
                through
                sustainable farming practices and holistic health solutions. As a parent company, we oversee two specialized
                subsidiaries: The Natural Gardens and Farms, and The Natural Pharmacy. Our mission is to create a harmonious
                balance between nature, nutrition, and wellness, ensuring a healthier and more sustainable future for
                everyone.</p>
                <div class="flex items-center justify-center md:justify-start">
                    <a href="/" class="flex text-white gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                        <p>Learn More</p>
                        <i class="ri-arrow-right-s-line mt-1"></i>
                    </a>
                </div>
            <img src="{{ asset('images/about-image.jpg') }}" class="mt-10" alt="">
        </div>
    </section>

    <section class="md:px-24 px-5 w-full flex flex-col justify-center h-96 relative overflow-hidden"
        style="background: url('{{ asset('images/about-image.jpg') }}'); background-size: cover; background-position: center center; background-attachment: fixed;">
        <h1 class="tex-xl text-white font-bold text-5xl z-10 md:text-left text-center">Our Vision</h1>
        <p class="text-white text-lg z-10 md:w-[600px] mt-6 md:text-left text-center">To be a global leader in agriculture and natural health, setting
            new standards for sustainability and wellness.</p>
        <div class="absolute top-0 left-0 z-0 bg-black h-96 w-full opacity-60"></div>
    </section>



    <section class="md:px-24 px-5 w-full py-28 bg-slate-50 flex flex-col md:flex-row gap-4">
        <div class="md:w-[40%]">
            <h1 class="text-4xl font-bold mb-6 text-center md:text-left">Our Services</h1>
            <p class="text-lg leading-8 mb-4 text-center md:text-left">
                We foster a sustainable world by promoting advanced farming techniques and providing holistic health
                solutions that enhance overall well-being.
            </p>
            <a href="/" class="md:flex hidden text-white gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                <p>Learn More</p>
                <i class="ri-arrow-right-s-line mt-1"></i>
            </a>
        </div>

        <section class="bg-light md:px-12 md:w-[60%]">
            <div class="md:w-full flex flex-col gap-1">
                <div class="accordion cursor-pointer">
                    <div class="flex items-center p-5 justify-between accordion-top">
                        <div class="flex items-center gap-10">
                            <h2 class="text-lg font-[Mada] font-medium">
                                Livestock
                            </h2>
                        </div>

                        <i class="ri-add-line text-[#141d38] text-lg cursor-pointer"></i>
                    </div>

                    <div class="px-5 accordion-bottom rounded-b-lg">
                        <p class="font-base font-[Mada] text-[#7B808E]">
                            Our farms are home to healthy and well-cared-for livestock, including chickens and catfish. We
                            follow strict guidelines to ensure their well-being and productivity.
                        </p>
                    </div>
                </div>

                <div class="accordion cursor-pointer">
                    <div class="flex items-center p-5 justify-between accordion-top">
                        <div class="flex items-center gap-10">
                            <h2 class="text-lg font-[Mada] font-medium">
                                Poultry Breeding
                            </h2>
                        </div>

                        <i class="ri-add-line text-[#141d38] text-lg cursor-pointer"></i>
                    </div>

                    <div class="px-5 accordion-bottom rounded-b-lg">
                        <p class="font-base font-[Mada] text-[#7B808E]">
                            We are experts in poultry breeding, focusing on producing high-quality birds for various
                            purposes, from eggs to meat.
                        </p>
                    </div>
                </div>

                <div class="accordion cursor-pointer">
                    <div class="flex items-center p-5 justify-between accordion-top">
                        <div class="flex items-center gap-10">
                            <h2 class="text-lg font-[Mada] font-medium">
                                Crop & Vegetable Planting:
                            </h2>
                        </div>

                        <i class="ri-add-line text-[#141d38] text-lg cursor-pointer"></i>
                    </div>

                    <div class="px-5 accordion-bottom rounded-b-lg">
                        <p class="font-base font-[Mada] text-[#7B808E]">
                            We grow a wide range of crops and vegetables, including maize, spinach, kale, and bitter leaf,
                            using sustainable farming practices that respect the environment.
                        </p>
                    </div>
                </div>


                <div class="accordion cursor-pointer">
                    <div class="flex items-center p-5 justify-between accordion-top">
                        <div class="flex items-center gap-10">
                            <h2 class="text-lg font-[Mada] font-medium">
                                Crop Spraying:
                            </h2>
                        </div>

                        <i class="ri-add-line text-[#141d38] text-lg cursor-pointer"></i>
                    </div>

                    <div class="px-5 accordion-bottom rounded-b-lg">
                        <p class="font-base font-[Mada] text-[#7B808E]">
                            Our advanced crop spraying techniques ensure that our produce remains free of pests and
                            diseases, guaranteeing high yields and excellent quality.
                        </p>
                    </div>
                </div>


                <div class="accordion cursor-pointer">
                    <div class="flex items-center p-5 justify-between accordion-top">
                        <div class="flex items-center gap-10">
                            <h2 class="text-lg font-[Mada] font-medium">
                                Holistic Health Solutions
                            </h2>
                        </div>

                        <i class="ri-add-line text-[#141d38] text-lg cursor-pointer"></i>
                    </div>

                    <div class="px-5 accordion-bottom rounded-b-lg">
                        <p class="font-base font-[Mada] text-[#7B808E]">
                            The Natural Pharmacy is dedicated to reversing diseases and enhancing health through certified
                            neuropathy, nutrition, and holistic modalities. We offer a range of natural health products and
                            services designed to promote overall well-being.
                        </p>
                    </div>
                </div>

            </div>

        </section>

    </section>
@endsection()
