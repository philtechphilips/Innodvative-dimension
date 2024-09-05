@extends('layouts.the-farmacy-app')

@include('includes.health-nav')


@section('content')
    <section class="md:px-10 px-5 relative w-full h-screen flex flex-col justify-center"
        style="background: url('{{ asset('images/health-bg.jpg') }}'); background-size: cover; background-position: center center;">
        <div class="md:w-[500px] z-10">
            <h1 data-aos="fade-up" data-aos-duration="1000"
                class="text-5xl text-center md:text-left font-bold leading-[60px] z-10 text-white">
                Transform Your Health Naturally
            </h1>

            <p data-aos="fade-up" data-aos-duration="1000"
                class="tet-white text-center md:text-left font-medium text-white mt-8 mb-6">
                At The Natural Farmacy, we specialize in reversing diseases and restoring vitality through certified
                naturopathic care, holistic treatments, and organic skincare. Discover the power of natural healing and
                experience wellness from the inside out. Let nature be your guide to a healthier, happier you.
            </p>

            <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center md:justify-start">
                <a href="https://www.instagram.com/dnaturalfarmacy?igsh=MXUzZndta2x1cXRxZQ=="
                    class="flex text-white gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                    <p>Learn More</p>
                    <i class="ri-arrow-right-s-line mt-1"></i>
                </a>
            </div>
        </div>
        <div class="bg-black w-full h-screen absolute top-0 z-0 left-0 opacity-70"></div>
    </section>

    <section id="about" class="md:px-10 px-5 w-full py-28 bg-slate-50 flex flex-col md:flex-row gap-16">
        <div data-aos="fade-up" data-aos-duration="1000" class="md:w-1/2">
            <img src="{{ asset('images/SaveClip.App_457380027_3797691280488873_7743355133226346202_n.jpg') }}"
                alt="">
        </div>

        <div class="md:w-1/2">
            <h1 data-aos="fade-up" data-aos-duration="1000" class="text-4xl font-bold mb-6 text-center md:text-left">About
                Us</h1>
            <p data-aos="fade-up" data-aos-duration="1000" class="text-lg leading-8 mb-4 text-center md:text-left">
                At The Natural Farmacy, we are dedicated to helping you achieve lasting health and wellness through
                certified naturopathic care, holistic treatments, and natural skincare. We believe in the power of nature to
                heal and restore balance in both the body and mind.
                Our approach focuses on reversing chronic conditions and supporting overall well-being by treating the root
                cause of disease. From personalized nutrition plans to natural remedies, we help you embark on a journey to
                vibrant health.

            </p>
            <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center justify-center md:justify-start">
                <a href="https://www.instagram.com/dnaturalfarmacy?igsh=MXUzZndta2x1cXRxZQ=="
                    class="flex text-white gap-0 items-center bg-[#0E623E] rounded-lg w-fit px-6 py-2">
                    <p>Learn More</p>
                    <i class="ri-arrow-right-s-line mt-1"></i>
                </a>
            </div>
            <img data-aos="fade-up" data-aos-duration="1000"
                src="{{ asset('images/SaveClip.App_457824983_814429217569939_9069689265787596199_n.jpg') }}" class="mt-10"
                alt="">
        </div>
    </section>

    <section id="services" class="md:px-10 px-5 w-full pb-28 bg-slate-50 flex flex-col">
        <div class="md:w-[40%]">
            <h1 data-aos="fade-up" data-aos-duration="700" class="text-4xl font-bold mb-6 text-center md:text-left">Our Services</h1>
        </div>

        <div class="flex md:flex-row flex-col gap-4">
            <div data-aos="fade-up" data-aos-duration="800" class="flex flex-col border rounded-2xl p-6 md:w-1/4">
                <h1 class="text-xl font-semibold mb-2">Certified Naturopathic Care</h1>
                <p>Led by a certified naturopath, we offer expert guidance using natural, evidence-based therapies to promote healing and vitality.</p>
            </div>

            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="50" class="flex flex-col border rounded-2xl p-6 md:w-1/4">
                <h1 class="text-xl font-semibold mb-2">Nutritional Healing</h1>
                <p>
                    Nutrition is the cornerstone of health. We create individualized nutrition plans aimed at reversing disease and optimizing well-being.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" class="flex flex-col border rounded-2xl p-6 md:w-1/4">
                <h1 class="text-xl font-semibold mb-2">Holistic Modalities</h1>
                <p>
                    Our treatments include herbal medicine, detox programs, and stress management techniques to support your body’s natural healing processes.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="150" class="flex flex-col border rounded-2xl p-6 md:w-1/4">
                <h1 class="text-xl font-semibold mb-2">Organic Skincare</h1>
                <p>
                    Experience the transformative power of nature with our organic skincare range. Free from harmful chemicals, our products are crafted to nourish and rejuvenate your skin, leaving it radiant and healthy.
                </p>
            </div>
        </div>

    </section>

    <section class="md:px-10 px-5 w-full flex flex-col justify-center h-96 relative overflow-hidden"
        style="background: url('{{ asset('images/about-image.jpg') }}'); background-size: cover; background-position: center center; background-attachment: fixed;">
        <h1 data-aos="fade-up" data-aos-duration="1000"
            class="tex-xl text-white font-bold text-4xl z-10 md:text-left text-center">Why Choose The Natural Farmacy?</h1>
       
            <ul class="flex flex-col gap-5 list-disc z-10">
                <li>
                    <p data-aos="fade-up" data-aos-duration="1000"
                    class="text-white text-lg z-10 md:w-[600px] mt-6 md:text-left text-center">Proven methods for reversing chronic illnesses</p>

                    <p data-aos="fade-up" data-aos-duration="1000"
                    class="text-white text-lg z-10 md:w-[600px] mt-6 md:text-left text-center">Safe, natural, and personalized care</p>

                    <p data-aos="fade-up" data-aos-duration="1000"
                    class="text-white text-lg z-10 md:w-[600px] mt-6 md:text-left text-center">Premium organic skincare products for healthy, glowing skin</p>

                    <p data-aos="fade-up" data-aos-duration="1000"
                    class="text-white text-lg z-10 md:w-[600px] mt-6 md:text-left text-center">Compassionate and experienced practitioners</p>
                </li>
            </ul>
           
        <div class="absolute top-0 left-0 z-0 bg-black h-96 w-full opacity-60"></div>
    </section>


    @include("includes.health-footer")
@endsection()
