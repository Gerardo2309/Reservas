<div>
    @if ($showSection1)
        <!-- component -->
        <div class="font-sans flex flex-col w-full">
            <div class="bg-black md:overflow-hidden">
                <div class="px-4 py-20">
                    <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
                        <h1
                            class=" text-4xl font-bold tracking-tight text-gray-100 sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                            <span class="block text-red-400">Conoce </span><span class="block text-gray-100 ">Nuestras
                                Categorías</span>
                        </h1>
                    </div>
                </div>

                <svg class="fill-current text-white dark:text-gray-900 block" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1440 320">
                    <path fill-opacity="1"
                        d="M0,64L120,85.3C240,107,480,149,720,149.3C960,149,1200,107,1320,85.3L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
                    </path>
                </svg>
            </div>

            <div class="w-full mx-auto xl:mt-[-450px] lg:mt-[-380px] md:mt-[-320px] sm:mt-[-320px]  mt-[-240px] relative z-20  md:block"
                style=" border-radius: 20px;">
                <main class="mt-32">

                    <div class="container mx-auto px-6">
                        <div class="relative h-64 rounded-md overflow-hidden bg-cover bg-center">
                            <img decoding="async" loading="lazy" src="{{ asset($c1foto1) }}" class="object-cover absolute w-full h-full" alt="">
                            <div class="relative bg-gray-900 bg-opacity-50 flex items-center h-full">
                                <div class="px-10 max-w-xl">
                                    <h2 class="text-2xl text-white font-semibold">JOYERÍA</h2>
                                    <p class="mt-2 text-gray-400">Inigualable calidad y exclusividad de nuestras
                                        piezas de
                                        joyería.
                                        Contamos con un taller funcional dentro de la tienda donde se diseña y
                                        se produce
                                        las colecciones especiales y productos exclusivos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="md:flex  md:-mx-4">
                            <div
                                class="relative w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2">
                                <img decoding="async" loading="lazy" src="{{ asset($c1foto2) }}" class="object-cover absolute w-full h-full" alt="">
                                <div class="relative bg-gray-900 bg-opacity-50 flex items-center h-full">
                                    <div class="px-10 max-w-xl">
                                        <h2 class="text-2xl text-white font-semibold">PIELES EXÓTICAS</h2>
                                        <p class="mt-2 text-gray-400">Las pieles mas exóticas del mundo:
                                            Cocodrilo,
                                            Avestruz, Tortuga,
                                            Mantarraya y mucho más.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="relative w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2">
                                <img decoding="async" loading="lazy" src="{{ asset($c1foto3) }}" class="object-cover absolute w-full h-full" alt="">
                                <div class="relative bg-gray-900 bg-opacity-50 flex items-center h-full">
                                    <div class="px-10 max-w-xl">
                                        <h2 class="text-2xl text-white font-semibold">TEQUILA</h2>
                                        <p class="mt-2 text-gray-400">Es sin duda alguna, uno de los atractivos
                                            principales
                                            de nuestra tienda: La famosa degustación de Tequila.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:flex  md:-mx-4">

                            <div class="relative w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" >
                                <img decoding="async" loading="lazy" src="{{ asset($c1foto4) }}" class="object-cover absolute w-full h-full" alt="">
                                <div class="relative bg-gray-900 bg-opacity-50 flex items-center h-full">
                                    <div class="px-10 max-w-xl">
                                        <h2 class="text-2xl text-white font-semibold">TAPETES</h2>
                                        <p class="mt-2 text-gray-400">Arte ancestral y algo de magia
                                            caracterizan a las
                                            alfombras
                                            y tapetes orientales. Estas maravillosas piezas originales de
                                            Turquía
                                            son diseños únicos y exclusivos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2">
                                <img decoding="async" loading="lazy" src="{{ asset($c1foto5) }}" class="object-cover absolute w-full h-full" alt="">
                                <div class="relative bg-gray-900 bg-opacity-50 flex items-center h-full">
                                    <div class="px-10 max-w-xl">
                                        <h2 class="text-2xl text-white font-semibold">ARTESANÍAS</h2>
                                        <p class="mt-2 text-gray-400">La fusión de dos culturas enriquecen
                                            nuestro concepto
                                            ofreciendo
                                            las típicas artesanías mexicanas y piezas únicas elaborados a mano.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </main>

            </div>

        </div>
        <!-- component ****cambiar imagenes***-->
        <div class="py-14 sm:pt-40">
            <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12 lg:px-20">
                <div class="justify-center text-center gap-6 md:text-left md:flex lg:items-center  lg:gap-16">
                    <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
                        <h1 class="text-4xl text-gray-700 dark:text-with font-bold md:text-5xl">Buy now and benefit up
                            to <span class="text-blue-500">65% off</span></h1>
                        <p class="text-lg">Be part of millions people around the world using tailus in modern User
                            Interfaces.</p>
                    </div>
                    <div class="grid grid-cols-5 grid-rows-4 gap-4 md:w-5/12 lg:w-6/12">
                        <div class="col-span-2 row-span-4">
                            <img decoding="async" loading="lazy" src="{{ asset($desc1) }}"
                                class="w-full h-72 sm:h-96 object-cover object-center rounded-full" alt="shoes">
                        </div>
                        <div class="col-span-2 row-span-2">
                            <img decoding="async" loading="lazy" src="{{ asset($desc2) }}"
                                class="w-full h-36 sm:h-56 object-cover object-center rounded-xl" alt="shoe">
                        </div>
                        <div class="col-span-3 row-span-3">
                            <img decoding="async" loading="lazy" src="{{ asset($desc3) }}"
                                class="w-full h-32 sm:h-40 object-cover object-center rounded-xl" alt="shoes">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Main -->


        <!-- Parallax Background -->
        <div class="flex-col w-full h-[500px] opacity-80 bg-cover bg-fixed bg-center flex justify-center items-center" 
            style="background-image: url({{ asset($background) }});">
            <h1 class="text-white text-5xl font-semibold font-serif mt-20 mb-10">
                La elegancia que deseas. La atención que mereces.
            </h1>

        </div>




        <!-- component -->
        <div class="flex justify-center items-center  min-h-screen bg-black">
            <!-- COMPONENT CODE -->
            <div class="container  px-5 py-10 sm:py-20 lg:mb-20 lg:px-28">
                <div class="relative w-full  lg:w-9/12 mr-auto rounded-2xl shadow-2xl">
                    <img decoding="async" loading="lazy" alt="Card" src="{{ asset($coment) }}"
                        class="w-full rounded-lg shadow-lg" />
                </div>
                <div class="relative w-full -mt-12 lg:-mt-96 lg:w-5/12 p-8 ml-auto bg-blue-800 rounded-2xl z-50">
                    <div class="flex flex-col text-white">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="text-indigo-200 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24">
                                <path
                                    d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
                            </svg>
                        </div>
                        <p class="text-white my-5 px-2">
                            El lugar es muy bonito, las piezas de joyería bastante extravagantes pero si recorres los
                            aparadores puedes encontrar diseños minimalistas muy agradables. Los precios bastante
                            elevados, pero a manera de las joyerias turcas pueden hacerte un buen descuento si te ven
                            indeciso.
                        </p>
                        <div class="flex justify-between pl-2">
                            <h3 class="font-bold text-2xl">- Cyn Beth</h3>
                            <i class="fas fa-quote-right text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COMPONENT CODE -->
        </div>
    @endif

</div>
