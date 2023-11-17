<div>
    <div class="w-full max-w-6xl rounded bg-white p-10 lg:p-14 mx-auto text-gray-800 relative md:text-left">
        <div class="md:flex ">
            <div class="w-full md:w-7/12 md:px-10 mb-10 md:mb-0">

                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        @foreach ($tour->imagenes as $imagen)
                            <!-- Item -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset($imagen->url) }}"
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
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
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
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>
            <div class="w-full md:w-5/12">
                <div class="mb-10">
                    <p class="text-xs">{{ $tour->tipo->name ?? 'No Type' }}</p>
                    <h1 class="font-bold uppercase text-3xl mb-5">{{ $tour->name }}
                    </h1>
                    <p class="text-base text-justify">{{ $tour->description }}</p>
                </div>
                <div class="mt-3 flex items-center justify-between">
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <P class="text-sm text-gray-400">34 Reviewers</P>
                    </div>
                    <div
                        class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">

                        <button class="text-base3">Reserve</button>

                    </div>



                </div>
            </div>
        </div>
        <div class="w-full md:flex">
            @if (count($tour->additionals) != 0)
                <div class="p-6 w-full md:w-1/2">
                    <h1 class="text-lg font-medium text-gray-700 capitalize lg:text-xl dark:text-white">
                        What’s included:</h1>

                    <div class="mt-8 space-y-4">
                        @foreach ($tour->additionals as $additional)
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 text-blue-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>

                                <span
                                    class="text-justify ml-8 text-gray-700 dark:text-gray-300">{{ $additional->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if (count($tour->noadditionals) != 0)
                <div class="p-6 w-full md:w-1/2">
                    <h1 class="text-lg font-medium text-gray-700 capitalize lg:text-xl dark:text-white">
                        What's not included:</h1>

                    <div class="mt-8 space-y-4">
                        @foreach ($tour->noadditionals as $noadditional)
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 text-red-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                                        clip-rule="evenodd" />
                                </svg>

                                <span
                                    class="text-justify ml-8 text-gray-700 dark:text-gray-300">{{ $noadditional->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        <div class="w-full pt-5">
            <h1 class="text-lg font-medium text-gray-700 capitalize lg:text-xl dark:text-white">
                What's the route:</h1>

            <div x-data="app()" x-cloak>

                <div class="w-full py-6">
                    <div class="flex">
                        @foreach ($tour->routes as $clave => $route)
                            <div class="w-1/4">
                                <div class="relative mb-2">
                                    <div @click="step = {{ $clave }}" onclick="barra({{ $clave }})"
                                        class="butsteps w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-gray-600 flex items-center">
                                        <span class="text-center w-full">
                                            <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="24" height="24">
                                                <path class="heroicon-ui"
                                                    d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z" />
                                            </svg>
                                        </span>
                                    </div>
                                    @if ($clave + 1 < count($tour->routes))
                                        <div class="absolute flex align-center items-center align-middle content-center"
                                            style="width: calc(100% - 2.5rem - 1rem); top: 50%; left:100%; transform: translate(-50%, -50%)">
                                            <div
                                                class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                                                <div class="barra w-0 bg-green-300 py-1 rounded">
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <div class="text-xs text-center md:text-base">First stop</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="max-w-4xl mx-auto">

                    <div>
                        <!-- Top Navigation -->
                        <div>
                            <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                                x-text="`Step: ${step+1} of {{ count($tour->routes) }}`"></div>

                        </div>
                        <!-- /Top Navigation -->

                        <!-- Step Content -->
                        <div class="py-10">
                            @foreach ($tour->routes as $clave => $route)
                                <div x-show.transition.in="step === {{ $clave }}">
                                    <div class="grid gap-6">
                                        <!-- component -->
                                        <div class="lg:flex items-center justify-between">
                                            <div class="lg:w-1/3">
                                                <h1
                                                    class="text-4xl font-semibold leading-9 text-gray-800 dark:text-white">
                                                    {{ $route->name }}</h1>
                                                <p class="text-base leading-6 mt-4 text-gray-600 dark:text-gray-100">
                                                    {{ $route->description }}</p>
                                            </div>
                                            <div class="lg:w-7/12 lg:mt-0 mt-8">
                                                <div class="w-full h-full bg-red-200">
                                                    <img src="https://i.ibb.co/cbyDY74/pexels-max-vakhtbovych-6782351-1-1.png"
                                                        alt="apartment design" class="w-full sm:block hidden" />
                                                    <img src="https://i.ibb.co/ZVPGjGJ/pexels-max-vakhtbovych-6782351-1.png"
                                                        alt="apartment design" class="sm:hidden block w-full" />
                                                </div>
                                                <div
                                                    class="grid sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 lg:gap-4 gap-3 lg:mt-8 md:mt-6 mt-4">
                                                    @foreach ($route->imagenes as $clave => $image)
                                                        @if ($clave <= 1)
                                                            <img src="{{ asset($image->url) }}" class="w-full"
                                                                alt="kitchen" />
                                                        @elseif ($clave == 2)
                                                            <div class="relative">
                                                                <img src="{{ asset($image->url) }}" class="w-full"
                                                                    alt="sitting room" />
                                                                <div
                                                                    class="absolute inset-y-0 z-10 w-full bg-white/90 px-4 py-2 flex items-center justify-center text-gray-500 ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-6 lg:h-8 xl:h-10 w-6 lg:w-8 xl:w-10 text-gray-500"
                                                                        height="1em" viewBox="0 0 448 512">
                                                                        <path
                                                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                                                    </svg>
                                                                    <span
                                                                        class="text-2xl lg:text-3xl xl:text-4xl font-bold text">{{ count($route->imagenes) - 2 }}</span>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                        <!-- / Step Content -->
                    </div>
                </div>
            </div>

            <script>
                function app() {
                    barra(0);
                    return {
                        step: 0,
                    }
                }

                function barra(valor) {
                    var elemento = document.getElementsByClassName("barra");
                    var elemento2 = document.getElementsByClassName("butsteps");
                    for (let index = 0; index < elemento2.length; index++) {
                        if (index == valor) {
                            if (index < elemento.length) {
                                elemento[index].className = " barra w-0 bg-green-300 py-1 rounded";
                            }
                            elemento2[index].className =
                                "butsteps w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center";
                        } else if (index < valor) {
                            elemento[index].className = " barra w-full bg-green-300 py-1 rounded";
                            elemento2[index].className =
                                "butsteps w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center";
                        } else {
                            if (index < elemento.length) {
                                elemento[index].className = " barra w-0 bg-green-300 py-1 rounded";
                            }
                            elemento2[index].className =
                                "butsteps w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-gray-600 flex items-center";
                        }
                    }
                }
            </script>
        </div>





    </div>
</div>
