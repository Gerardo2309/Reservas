<x-app-layout>
    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- component -->
            <nav class="text-sm sm:text-base  p-4 md:p-6 lg:p-6">
                <ol class="list-none p-0 inline-flex space-x-2 text-gray-700 dark:text-gray-300">
                    <li class="flex items-center">
                        <svg onclick="window.location.href='/';" xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 576 512"
                            class="cursor-pointer dark:fill-gray-300 hover:fill-blue-500 transition-colors duration-300"
                            fill="#4b5563"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg> <span class="mx-2">/</span>
                    </li>
                    <li class="flex items-center">
                        <a href="/" class="hover:text-blue-500 transition-colors duration-300">Tours</a>
                        <span class="mx-2">/</span>
                    </li>
                    <li class="flex items-center">
                        <span class="">{{ $tour->name }}</span>
                    </li>
                </ol>
            </nav>
            <div class=" overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
                <div class="w-full max-w-6xl lg:p-14 mx-auto text-gray-700 relative md:text-left">
                    <div class="md:flex ">
                        <div class="w-full">
                            <div class="md:float-left w-full md:w-7/12 md:pr-10 md:pb-2 ">

                                <div id="default-carousel" class="relative w-full" data-carousel="static">
                                    <!-- Carousel wrapper -->
                                    <div class="relative h-56 overflow-hidden lg:rounded-lg md:h-96">
                                        @foreach ($tour->imagenes as $imagen)
                                            <!-- Item -->
                                            <div class=" duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ asset($imagen->url ?? 'https://content.r9cdn.net/rimg/dimg/f2/b1/89e06bf7-city-34713-16ed2f2c7f1.jpg?width=1366&height=768&xhint=1735&yhint=2084&crop=true') }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                    alt="...">
                                            </div>
                                        @endforeach

                                    </div>
                                    <!-- Slider controls -->
                                    <button type="button"
                                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                        data-carousel-prev>
                                        <span
                                            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg aria-hidden="true"
                                                class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7"></path>
                                            </svg>
                                            <span class="sr-only">Previous</span>
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                        data-carousel-next>
                                        <span
                                            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg aria-hidden="true"
                                                class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7">
                                                </path>
                                            </svg>
                                            <span class="sr-only">Next</span>
                                        </span>
                                    </button>
                                </div>

                            </div>
                            <div class="p-5">
                                <h1 class="text-sm font-bold uppercase pb-2  text-gray-600">
                                    {{ $tour->tipo->name ?? 'No Type' }}</h1>

                                <h1 class="font-bold uppercase text-2xl mb-5 text-black ">{{ $tour->name }}
                                </h1>

                                <p class="font-semibold text-justify">
                                    Cancun's mixology and shopping tour. Is a great way for you to feel and enjoy
                                    Cancun. With its combination of culture, memories, luxury, natural beauty a
                                    flavors of the Mexican Caribbean.
                                </p>
                            </div>



                        </div>
                    </div>
                </div>


                <div class="p-5">
                    <h1 class="font-bold  text-2xl mb-5  ">About this activity
                    </h1>
                    <div class="border-t-0 align-middle border-l-0 border-r-0 text-xs p-4 text-left flex items-start">
                        <span class="w-6 h-6 mt-2">
                            <i class="fa-regular fa-calendar-check fa-2xl"></i>
                        </span>
                        <div>
                            <span class="text-xl ml-3 font-bold">Free cancellation</span>
                            <p class="text-base ml-3 mt-2 font-semibold text-gray-600">Cancel up to 24 hours in advance
                                for a full refund</p>
                        </div>
                    </div>
                    <div class="border-t-0 align-middle border-l-0 border-r-0 text-xs p-4 text-left flex items-start">
                        <span class="w-6 h-6 mt-2">
                            <i class="fa-regular fa-credit-card fa-2xl w-full"></i>
                        </span>
                        <div class="w-full">
                            <span class="text-xl ml-3 font-bold">Reserve now & pay later</span>
                            <p class="text-base ml-3 mt-2 font-semibold text-gray-600">Keep your travel plans flexible —
                                book your spot and pay nothing today.</p>
                        </div>
                    </div>
                    <div class="border-t-0 align-middle border-l-0 border-r-0 text-xs p-4 text-left flex items-start">
                        <span class="w-6 h-6 mt-2">
                            <i class="fa-solid fa-clock-rotate-left fa-2xl"></i>
                        </span>
                        <div>
                            <span class="text-xl ml-3 font-bold">Duration 3 hours</span>
                            <p class="text-base ml-3 mt-2 font-semibold text-gray-600">Check availability to see
                                starting times.</p>
                        </div>
                    </div>
                    <div class="border-t-0 align-middle border-l-0 border-r-0 text-xs p-4 text-left flex items-start">
                        <span class="w-6 h-6 mt-2">
                            <i class="fa-solid fa-person-hiking fa-2xl"></i>
                        </span>
                        <div>
                            <span class="text-xl ml-3 font-bold">Driver</span>
                            <p class="text-base ml-3 mt-2 font-semibold text-gray-600">Spanish, English</p>
                        </div>
                    </div>
                    <div class="border-t-0 align-middle border-l-0 border-r-0 text-xs p-4 text-left flex items-start">
                        <span class="w-6 h-6 mt-2">
                            <i class="fa-solid fa-users fa-2xl"></i>
                        </span>
                        <span class="text-xl ml-3 font-bold">Private group</span>
                    </div>


                </div>

                <div class="px-5 pt-5 ">
                    <h1 class="font-bold  text-2xl mb-2  ">Experience
                    </h1>
                </div>

                <div id="accordion-flush" data-accordion="open" class="px-5 pb-5"
                    data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span>Itinerary</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden lg:relative "
                        aria-labelledby="accordion-flush-heading-1">
                        <div class="w-full h-96 rounded-md lg:absolute lg:w-1/3 lg:left-1/2 lg:pt-10">
                            <iframe class="w-full h-full"
                                src="https://www.google.com/maps/d/embed?mid=1l6vS465yiAsvxPlsV0kLHT4SmNtBIoU&ehbc=2E312F&noprof=1"
                                height="480"></iframe>
                        </div>
                        <!-- component -->

                        <div class="p-4 max-w-full lg:w-1/2 mx-auto lg:mx-0 pt-10 lg:pt-10 flow-root">

                            <ol class="relative border-s border-gray-200 dark:border-gray-700">
                                <li class="mb-10 ms-6">
                                    <span
                                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                        <i class="fa-brands fa-product-hunt fa-xl"></i>
                                    </span>
                                    <h3
                                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                        2 pickup location options: <span
                                            class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ms-3">Latest</span>
                                    </h3>
                                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Cancún,
                                        Playa del Carmen</p>
                                </li>
                                @foreach ($tour->routes as $route)
                                    <li class="mb-10 ms-6">
                                        <span
                                            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </span>
                                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                            {{ $route->name }}</h3>
                                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">descrip</p>
                                    </li>
                                @endforeach
                                <li class="ms-6">
                                    <span
                                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                        <i class="fa-solid fa-circle-dot fa-xl"></i>
                                    </span>
                                    <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">2 drop-off
                                        locations:</h3>
                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Cancún, Playa del
                                        Carmen </p>
                                </li>
                            </ol>
                        </div>

                    </div>

                    <h2 id="accordion-flush-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                            data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                            aria-controls="accordion-flush-body-2">
                            <span>Highlights</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="p-5 border-b border-gray-200 dark:border-gray-700">
                            <ul class="list-disc list-inside font-medium text-base">
                                <li>Discover the secrets behind tequila on our tequila tasting tour.</li>
                                <li>Enjoy a colorful handicraft market & be amazed by the creativity of our artisans
                                </li>
                                <li>Immerse yourself in Mexican history and culture.</li>
                                <li>An opportunity to learn and enjoy the wonders of our country.</li>
                            </ul>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                            data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                            aria-controls="accordion-flush-body-3">
                            <span>Full description</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="p-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-900 font-medium text-base text-justify">{{ $tour->description }}
                            </p>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-4">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                            data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                            aria-controls="accordion-flush-body-4">
                            <span>Includes</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                        <div class="p-5 border-b border-gray-200 dark:border-gray-700">
                            <ul class="text-gray-900 text-base font-semibold space-y-3 grow">
                                @foreach ($tour->additionals as $additional)
                                    <li class="flex items-center">
                                        <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                        </svg>
                                        <span>{{ $additional->name }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="w-full fixed  bottom-0 bg-gray-100 ">
        <div class="w-full max-w-md mx-auto">

            <div class="py-2 px-5 bg-white">
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-full bg-blue-600  py-3 text-xl font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Check
                        availability</button>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
