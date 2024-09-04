<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>International Dimension | Improving lives through sustainable farming practices</title>

    <link rel="icon" href="{{ asset('images/icon.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mada:wght@200..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @vite('resources/css/app.css')
</head>

<body class="font-[Mulish] overflow-x-hidden bg-white">

    @yield('content')





    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
    {{-- Navigation Script --}}
    <script>
        const toggleButton = document.querySelectorAll('.menuButton');
        const menu = document.getElementById('menu');

        toggleButton.forEach(function(button) {
            button.addEventListener('click', function() {
                menu.classList.toggle('translate-x-[500px]');
            })
        });
    </script>
    {{-- Navigation Script ends here --}}

    {{-- Accordion Scripts --}}
    <script>
        const accordions = document.getElementsByClassName("accordion");

        for (let i = 0; i < accordions.length; i++) {
            // Toggle the accordion on click
            accordions[i].addEventListener("click", function() {
                this.classList.toggle("active");

                const icon = this.querySelector('i');

                if (this.classList.contains('active')) {
                    icon.classList.remove('ri-add-line');
                    icon.classList.add('ri-subtract-line');
                    icon.style.color = '#0e623e';
                } else {
                    icon.classList.remove('ri-subtract-line');
                    icon.classList.add('ri-add-line');
                    icon.style.color = '#141d38';
                }
            });

            // Remove the active class on mouse leave
            accordions[i].addEventListener("mouseleave", function() {
                if (this.classList.contains('active')) {
                    this.classList.remove('active');

                    const icon = this.querySelector('i');
                    icon.classList.remove('ri-subtract-line');
                    icon.classList.add('ri-add-line');
                    icon.style.color = '#141d38';
                }
            });
        }
    </script>
    {{-- Accordion scripts ends here --}}

    <script>
        const texts = [
            "We grow your food naturally with fairness and care",
            "Fresh farm produce to your doorstep",
            "Grow Your Organic Food"
        ];
        let index = 0;
        const textElement = document.getElementById('rotating-text');

        setInterval(() => {
            textElement.classList.add('opacity-0');
            setTimeout(() => {
                index = (index + 1) % texts.length;
                textElement.textContent = texts[index];
                textElement.classList.remove('opacity-0');
            }, 500);
        }, 3000);
    </script>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdownMenu');
            if (dropdown.classList.contains('opacity-0')) {
                dropdown.classList.remove('opacity-0', 'pointer-events-none');
                dropdown.classList.add('opacity-100', 'pointer-events-auto');
            } else {
                dropdown.classList.remove('opacity-100', 'pointer-events-auto');
                dropdown.classList.add('opacity-0', 'pointer-events-none');
            }
        }
    </script>
    @yield('script')
</body>

</html>
