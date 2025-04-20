<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Career Carnival</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" type="text/css" href="./assets/slick/slick.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="p5.min.js"></script>
    <script src="vanta.topology.min.js"></script>
</head>
<body>

    <nav
        class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://globalcareercarnival.in/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="./assets/images/nav-logo-black.png" class="h-12 w-auto" alt="Logo">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
                        href="https://globalcareercarnival.in/registration.php">Register Now</a></button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="https://globalcareercarnival.in/"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="https://globalcareercarnival.in/#about"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="https://globalcareercarnival.in/#whyattend"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Why
                            Attend</a>
                    </li>
                    <li>
                        <a href="https://globalcareercarnival.in/#events"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Events</a>
                    </li>

                    <li>
                        <a href="https://globalcareercarnival.in/#contact"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <a href="https://globalcareercarnival.in/#faq"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-20 sm:py-16 lg:py-0">
        <div class="w-full">
            <!-- Mobile Banner -->
            <img src="./assets/images/banner-mobile.png" alt="Mobile Banner" class="block lg:hidden w-full h-auto">

            <!-- Desktop Banner -->
            <img src="./assets/images/banner.png" alt="Desktop Banner" class="hidden lg:block w-full h-auto">
        </div>
    </section>

    <!-- <section class="py-20 sm:py-16 lg:py-2 relative w-full min-h-[100vh] bg-cover bg-center bg-no-repeat bg-fixed z-[-1]" style="background-image: url('./assets/images/');"> -->

    <!-- <section class="py-10 bg-white sm:py-16 lg:py-24">

        <div class="px-4 mx-auto max-w-4xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-12 text-center md:grid-cols-2 md:gap-12 place-items-center">

               
                <div>
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-blue-100 rounded-full">
                        <img src="./assets/images/icons-date.png" alt="Date Icon" class="w-9 h-9">
                    </div>
                    <h3 class="mt-6 text-lg font-semibold text-black leading-snug">
                        13 - 14 <br> May 2025
                    </h3>
                </div>

                <div>
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-green-100 rounded-full">
                        <img src="./assets/images/icons-location.png" alt="Location Icon" class="w-9 h-9">
                    </div>
                    <h3 class="mt-6 text-lg font-semibold text-black leading-snug">
                        Rozia International <br> Convention Centre
                    </h3>
                </div>

            </div>
        </div>
    </section> -->


    <section class="py-10 bg-white sm:py-16 lg:py-24 relative bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('./assets/images/pattern.png');">
        <div class="px-4 mx-auto max-w-4xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-12 text-center md:grid-cols-2 md:gap-12 place-items-center">
    
                <!-- Date -->
                <div>
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-blue-100 rounded-full">
                        <img src="./assets/images/icons-date.png" alt="Date Icon" class="w-9 h-9">
                    </div>
                    <h3 class="mt-6 text-lg font-semibold text-black leading-snug">
                        13 - 14 <br> May 2025
                    </h3>
                </div>
    
                <!-- Location -->
                <div>
                    <div class="flex items-center justify-center w-20 h-20 mx-auto bg-green-100 rounded-full">
                        <img src="./assets/images/icons-location.png" alt="Location Icon" class="w-9 h-9">
                    </div>
                    <h3 class="mt-6 text-lg font-semibold text-black leading-snug">
                        Rozia International <br> Convention Centre
                    </h3>
                </div>
    
            </div>
        </div>
    </section>
    




    <!-- <section class="py-10 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 place-items-center">
            <div>
              <img class="object-contain w-auto h-28" src="./assets/images/nect-logo.png" alt="Logo 1" />
            </div>
            <div>
              <img class="object-contain w-auto h-28" src="./assets/images/aman-logo.png" alt="Logo 2" />
            </div>
            <div>
              <img class="object-contain w-auto h-28" src="./assets/images/cigi-logo.png" alt="Logo 3" />
            </div>
          </div>
        </div>
      </section> -->




    <!-- <section class="py-20 sm:py-16 lg:py-2 relative w-full min-h-[100vh] bg-cover bg-center bg-no-repeat bg-fixed z-[-1]" style="background-image: url('./assets/images/pattern.png');"></section> -->
    <section id="about" class="pt-10 sm:pt-16 lg:pt-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">About
                    the Event</h2>
                <p class="mt-6 text-lg text-gray-900">Join us at the Rozia International Convention Centre for the
                    Global Career Carnival 2025, a transformative two-day event that bridges students, educators, and
                    career aspirants with industry leaders, academic experts, and career guidance professionals.</p>
            </div>
        </div>

        <div class="container mx-auto 2xl:px-12">
            <img class="w-full mt-2"
                src="./assets/images/about-section-image.png" alt="About" />
        </div>

    </section>




    <!-- <section id="about" class="py-10 sm:py-16 lg:py-24 relative w-full min-h-[100vh] bg-cover bg-center bg-no-repeat bg-fixed z-[-1]" style="background-image: url('./assets/images/hero-main.webp');">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <section class="py-10 sm:py-16 lg:py-24">
                <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="grid items-center md:grid-cols-2 gap-y-10 md:gap-x-20">
                        <div class="pr-12 sm:pr-0">
                            <div class="relative max-w-xs mb-12">
                                <img class="object-bottom rounded-md" src="./assets/images/about-avatar.webp" alt="About" />
                            </div>
                        </div>
            
                        <div>
                            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">About the Event</h2>
                            <p class="mt-4 text-base leading-relaxed text-gray-600">Join us at the Rozia International Convention Centre for the Global Career Carnival 2025, a transformative two-day event that bridges students, educators, and career aspirants with industry leaders, academic experts, and career guidance professionals.</p>
                        </div>
                    </div>
                </div>
            </section>      
          </div>
    </section> -->




    <section class="">
        <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <!-- <p class="mt-3 text-xl leading-relaxed text-gray-600 md:mt-8">KEYPOINTS</p> -->
            </div>

            <div class="grid grid-cols-1 gap-8 mt-10 text-center lg:mt-24 sm:gap-x-8 md:grid-cols-4">
                <div>
                    <h3 class="font-bold text-7xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-blue-600"> 100+
                        </span>
                    </h3>
                    <p class="mt-4 text-xl font-medium text-gray-900">Career Paths</p>
                    <!-- <p class="text-base mt-0.5 text-gray-500"></p> -->
                </div>

                <div>
                    <h3 class="font-bold text-7xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-blue-600"> 5000+
                        </span>
                    </h3>
                    <p class="mt-4 text-xl font-medium text-gray-900">Students Participants</p>
                    <!-- <p class="text-base mt-0.5 text-gray-500"></p> -->
                </div>

                <div>
                    <h3 class="font-bold text-7xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-blue-600"> 75+
                        </span>
                    </h3>
                    <p class="mt-4 text-xl font-medium text-gray-900">Career & Industry Stalls</p>
                    <!-- <p class="text-base mt-0.5 text-gray-500"></p> -->
                </div>
                <div>
                    <h3 class="font-bold text-7xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-blue-600"> 25+
                        </span>
                    </h3>
                    <p class="mt-4 text-xl font-medium text-gray-900">Expert-Led Sessions</p>
                    <!-- <p class="text-base mt-0.5 text-gray-500"></p> -->
                </div>
            </div>
        </div>
    </section>


    <section class="py-10 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="leading-tight text-black sm:text-4xl lg:text-2xl">The Global Career Carnival 2025 is a
                    pioneering educational summit designed to provide:</h2>
            </div>

            <div class="px-5 py-8 mt-12 lg:mt-20 lg:p-16">
                <div class="grid grid-cols-1 gap-12 lg:gap-16 sm:grid-cols-2">
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 w-16 h-16 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <div class="ml-5">
                            <h3 class="text-lg font-semibold text-black">Career guidance from top professionals</h3>
                            <p class="mt-4 text-base text-gray-600">Gain expert insights from industry leaders and
                                career coaches to help you make informed decisions about your future.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="flex-shrink-0 w-16 h-16 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <div class="ml-5">
                            <h3 class="text-lg font-semibold text-black">Interactive sessions on diverse career fields
                            </h3>
                            <p class="mt-4 text-base text-gray-600">Explore career opportunities in technology,
                                healthcare, business, arts, and more through engaging panel discussions and Q&A
                                sessions.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="flex-shrink-0 w-16 h-16 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <div class="ml-5">
                            <h3 class="text-lg font-semibold text-black">One-on-one mentorship opportunities</h3>
                            <p class="mt-4 text-base text-gray-600">Get personalized guidance from experienced
                                professionals who can provide clarity and direction on your career path.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="flex-shrink-0 w-16 h-16 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <div class="ml-5">
                            <h3 class="text-lg font-semibold text-black">Exhibitor stalls from leading institutions and
                                industries</h3>
                            <p class="mt-4 text-base text-gray-600">Connect with top universities, training centers, and
                                companies offering career programs, scholarships, and job opportunities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="whyattend" class="py-10 bg-gray-50 sm:py-16 lg:py-8">
        <div class="px- mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-xl mx-auto text-center">
                <div class="inline-flex px-4 py-1.5 mx-auto rounded-full bg-gradient-to-r from-fuchsia-600 to-blue-600">
                    <p class="text-xs font-semibold tracking-widest text-white">Global Career Carnival 2025</p>
                </div>
                <h2 class="mt-6 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Why Attend?</h2>
                <p class="mt-4 text-base leading-relaxed text-gray-600">Discover career opportunities, gain expert
                    insights, and connect with industry leaders at Global Career Carnival 2025. 🚀</p>
            </div>

            <div class="grid grid-cols-1 gap-5 mt-12 sm:grid-cols-3 lg:mt-20 lg:gap-x-12">
                <div class="transition-all duration-200 bg-white hover:shadow-xl">
                    <div class="py-10 px-9">
                        <svg class="w-16 h-16 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <h3 class="mt-8 text-lg font-semibold text-black">For Students & Career Aspirants:
                        </h3>
                        <ul class="mt-4 text-base text-gray-600 space-y-2">
                            <li>🎯 Explore diverse career paths</li>
                            <li>🎯 Gain expert insights from professionals</li>
                            <li>🎯 Get scholarships and career support information</li>
                        </ul>
                    </div>
                </div>

                <div class="transition-all duration-200 bg-white hover:shadow-xl">
                    <div class="py-10 px-9">
                        <svg class="w-16 h-16 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                        <h3 class="mt-8 text-lg font-semibold text-black">For Educators & Institutions:</h3>
                        <ul class="mt-4 text-base text-gray-600 space-y-2">
                            <li>📢 Stay updated on education trends</li>
                            <li>📢 Build networks with academic leaders</li>
                            <li>📢 Engage with career-focused students</li>
                        </ul>
                    </div>
                </div>

                <div class="transition-all duration-200 bg-white hover:shadow-xl">
                    <div class="py-10 px-9">
                        <svg class="w-16 h-16 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <h3 class="mt-8 text-lg font-semibold text-black">For Exhibitors & Sponsors:
                        </h3>
                        <ul class="mt-4 text-base text-gray-600 space-y-2">
                            <li>💡 Showcase your brand to thousands of students</li>
                            <li>💡 Host career-focused workshops</li>
                            <li>💡 Gain visibility among academic and industry leaders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="events" class="py-10 bg-gray-100 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Event Schedule</h2>
                <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">Explore a dynamic two-day
                    schedule featuring expert talks, career guidance sessions, interactive workshops, and networking
                    opportunities. 🚀</p>
            </div>

            <ul class="max-w-md mx-auto mt-16 space-y-12">
                <li class="relative flex items-start">
                    <div class="-ml-0.5 absolute mt-0.5 top-14 left-8 w-px border-l-4 border-dotted border-gray-300 h-full"
                        aria-hidden="true"></div>

                    <div
                        class="relative flex items-center justify-center flex-shrink-0 w-16 h-16 bg-white rounded-full shadow">
                        <svg class="w-10 h-10 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-lg font-semibold text-black">Day 1</h3>
                        <ul class="mt-4 text-base text-gray-600 space-y-2">
                            <li>Inauguration Ceremony</li>
                            <li>Career Guidance Sessions</li>
                            <li>Expert Talks & Panel Discussions</li>
                            <li>Interactive Workshops</li>
                            <li>Award Ceremony</li>
                        </ul>
                    </div>
                </li>

                <li class="relative flex items-start">
                    <div class="-ml-0.5 absolute mt-0.5 top-14 left-8 w-px border-l-4 border-dotted border-gray-300 h-full"
                        aria-hidden="true"></div>

                    <div
                        class="relative flex items-center justify-center flex-shrink-0 w-16 h-16 bg-white rounded-full shadow">
                        <svg class="w-10 h-10 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-lg font-semibold text-black">Day 2</h3>
                        <ul class="mt-4 text-base text-gray-600 space-y-2">
                            <li>Industry-Specific Career Orientations</li>
                            <li>Hands-on Workshops & Training</li>
                            <li>Networking & Counselling Sessions</li>
                            <li>Exhibitor Engagements</li>
                        </ul>
                    </div>
                </li>
        </div>
    </section>


    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">
                    Speakers</h2>
                <p class="max-w-2xl mx-auto mt-4 text-xl text-gray-600">Inspiring voices from diverse fields, sharing
                    insights that spark ideas and drive change.</p>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-3 md:mt-16 lg:gap-x-12">
                <div>
                    <img class="w-full" src="./assets/images/sp1.jpg" alt="Speaker" />
                </div>

                <div>
                    <img class="w-full" src="./assets/images/sp2.jpg" alt="Speaker" />
                </div>

                <div>
                    <img class="w-full" src="./assets/images/sp3.jpg" alt="Speaker" />
                </div>
                <div>
                    <img class="w-full" src="./assets/images/sp4.jpg" alt="Speaker" />
                </div>

                <div>
                    <img class="w-full" src="./assets/images/sp5.jpg" alt="Speaker" />
                </div>

                <div>
                    <img class="w-full" src="./assets/images/sp6.jpg" alt="Speaker" />
                </div>
                <div>
                    <img class="w-full" src="./assets/images/sp7.jpg" alt="Speaker" />
                </div>
                <div>
                    <img class="w-full" src="./assets/images/sp8.jpg" alt="Speaker" />
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->

    <section id="contact" class="py-10 bg-gray-100 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl">Contact us</h2>
            </div>

            <div class="max-w-5xl mx-auto mt-12 sm:mt-16">
                <div class="grid grid-cols-1 gap-6 px-8 text-center md:px-0 md:grid-cols-3">
                    <div class="overflow-hidden bg-white rounded-xl">
                        <div class="p-6">
                            <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <p class="mt-6 text-lg font-medium text-gray-900">+91 9409991766</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded-xl">
                        <div class="p-6">
                            <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <p class="mt-6 text-lg font-medium text-gray-900">globalcareercarnival<br>@gmail.com</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded-xl">
                        <div class="p-6">
                            <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="mt-6 text-lg font-medium leading-relaxed text-gray-900">Rozia International
                                Convention Centre
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 overflow-hidden bg-white rounded-xl">
                    <div class="px-6 py-12 sm:p-12">
                        <h3 class="text-3xl font-semibold text-center text-gray-900">Send us a message</h3>

                        <form action="contact-form-handler.php" method="POST" class="mt-14">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
                                <div>
                                    <label for="name" class="text-base font-medium text-gray-900"> Your name </label>
                                    <div class="mt-2.5 relative">
                                        <input type="text" name="name" id="name" placeholder="Enter your full name"
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                    </div>
                                </div>

                                <div>
                                    <label for="email" class="text-base font-medium text-gray-900"> Email address
                                    </label>
                                    <div class="mt-2.5 relative">
                                        <input type="email" name="email" id="email" placeholder="Enter your full name"
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                    </div>
                                </div>

                                <div>
                                    <label for="phone" class="text-base font-medium text-gray-900"> Phone number
                                    </label>
                                    <div class="mt-2.5 relative">
                                        <input type="tel" name="phone" id="phone" placeholder="Enter your full name"
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                    </div>
                                </div>

                                <div>
                                    <label for="company" class="text-base font-medium text-gray-900"> Company name
                                    </label>
                                    <div class="mt-2.5 relative">
                                        <input type="text" name="company" id="company"
                                            placeholder="Enter your full name"
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="message" class="text-base font-medium text-gray-900"> Message </label>
                                    <div class="mt-2.5 relative">
                                        <textarea name="message" id="message" placeholder=""
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md resize-y focus:outline-none focus:border-blue-600 caret-blue-600"
                                            rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <button type="submit"
                                        class="inline-flex items-center justify-center w-full px-4 py-4 mt-2 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none hover:bg-blue-700 focus:bg-blue-700">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Frequently Asked Questions
            </h2>

            <div class="flow-root mt-12 sm:mt-16">
                <div class="divide-y divide-gray--200 -my-9">
                    <div class="py-9">
                        <p class="text-xl font-semibold text-black">Who can benefit from the Global Career Carnival
                            2025?</p>
                        <p class="mt-3 text-base text-gray-600">The event is designed for students, career aspirants,
                            educators, institutions, and industry professionals looking for expert career guidance,
                            mentorship, and networking opportunities.</p>
                    </div>

                    <div class="py-9">
                        <p class="text-xl font-semibold text-black">What can I expect from the career guidance sessions?
                        </p>
                        <p class="mt-3 text-base text-gray-600">Career guidance sessions feature top industry
                            professionals sharing insights on various career paths, industry trends, and skill-building
                            strategies to help you make informed career decisions.</p>
                    </div>

                    <div class="py-9">
                        <p class="text-xl font-semibold text-black">Are there opportunities for one-on-one mentorship?
                        </p>
                        <p class="mt-3 text-base text-gray-600">Yes! The event offers dedicated mentorship sessions
                            where attendees can connect with professionals for personalized career advice and guidance.
                        </p>
                    </div>

                    <div class="py-9">
                        <p class="text-xl font-semibold text-black">What kind of exhibitor stalls will be available?</p>
                        <p class="mt-3 text-base text-gray-600">
                            Leading universities, training institutions, and top companies will have exhibitor stalls
                            showcasing career programs, scholarships, and job opportunities for attendees.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div>
        <img class="w-full" src="./assets/images/header.jpeg" alt="Header" />
    </div>




    <section class="py-10 bg-gray-900 sm:pt-16 lg:pt-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">

            <div class="grid grid-cols-2 gap-x-5 gap-y-12 md:grid-cols-4 md:gap-x-12">

                <div>
                    <!-- <p class="text-base text-gray-500"></p>
    
                    <ul class="mt-8 space-y-4">
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                    </ul> -->
                </div>

                <div>
                    <!-- <p class="text-base text-gray-500"></p>
    
                    <ul class="mt-8 space-y-4">
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                    </ul> -->
                </div>

                <div>
                    <!-- <p class="text-base text-gray-500"></p>
    
                    <ul class="mt-8 space-y-4">
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                    </ul> -->
                </div>

                <div>
                    <!-- <p class="text-base text-gray-500"></p>
    
                    <ul class="mt-8 space-y-4">
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                        <li>
                            <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"></a>
                        </li>
                    </ul> -->

                </div>

            </div>

            <hr class="mt-16 mb-10 border-gray-800" />

            <div class="flex flex-wrap items-center justify-between">
                <img class="h-32 auto md:order-1" src="./assets/images/nav-logo.png" alt="" />

                <ul class="flex items-center space-x-3 md:order-3">
                    <li>
                        <a href="#" title=""
                            class="flex items-center justify-center text-white transition-all duration-200 bg-transparent border border-gray-700 rounded-full w-7 h-7 focus:bg-blue-600 hover:bg-blue-600 hover:border-blue-600 focus:border-blue-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                </path>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/globalcareercarnival/" title=""
                            class="flex items-center justify-center text-white transition-all duration-200 bg-transparent border border-gray-700 rounded-full w-7 h-7 focus:bg-blue-600 hover:bg-blue-600 hover:border-blue-600 focus:border-blue-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                                </path>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" title=""
                            class="flex items-center justify-center text-white transition-all duration-200 bg-transparent border border-gray-700 rounded-full w-7 h-7 focus:bg-blue-600 hover:bg-blue-600 hover:border-blue-600 focus:border-blue-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                </path>
                                <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                <path
                                    d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>

                <p class="w-full mt-8 text-sm text-center text-gray-100 md:mt-0 md:w-auto md:order-2">© Copyright 2025,
                    All Rights Reserved</p>
            </div>
        </div>
    </section>




    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>