<div>
    <section class="relative">
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen">
            <div>
                <img src="{{ asset($background) }}" loading="eager"
                    class="object-cover absolute top-0 w-full h-full bg-center bg-cover" alt="">
                <span class="w-full h-full absolute top-0 opacity-50 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="md:px-12 mx-auto md:max-w-7xl">
                        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
                            <h1
                                class="mb-8 text-4xl font-extrabold leading-none tracking-normal text-gray-100 md:text-6xl md:tracking-tight">
                                <span>Visit the beauty of</span> <span
                                    class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-purple-500 lg:inline">Mexico:
                                </span> <span>  Reserve your experience today!</span>
                            </h1>
                            <p class="px-0 mb-8 text-lg text-gray-400 md:text-xl lg:px-24">
                                visit our two stores for a seamless purchase
                            </p>
                            <div class=" space-x-0 md:space-x-2 rounded-xl bg-white p-5">

                                <!-- component -->
                                <div x-data="app()" x-cloak>
                                    <div class="max-w-3xl mx-auto">

                                        <div x-show.transition="step === 'complete'">
                                            <div
                                                class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
                                                <div>
                                                    <svg class="mb-4 h-20 w-20 text-green-500 mx-auto"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">
                                                        Registration Success</h2>

                                                    <div class="text-gray-600 mb-8">
                                                        Thank you. We have sent an email to demo@demo.test.
                                                        Click the link in the message to view your reservation.
                                                    </div>

                                                    <button @click="step = 1"
                                                        class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Back
                                                        to home</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div x-show.transition="step != 'complete'">
                                            <!-- Top Navigation -->
                                            <div>
                                                <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                                                    x-text="`Step: ${step} of 3`"></div>
                                                <div
                                                    class="flex flex-col md:flex-row md:items-center md:justify-between">
                                                    <div class="flex-1">
                                                        <div x-show="step === 1">
                                                            <div class="text-lg font-bold text-gray-700 leading-tight">
                                                                Booking Data</div>
                                                        </div>

                                                        <div x-show="step === 2">
                                                            <div class="text-lg font-bold text-gray-700 leading-tight">
                                                                Personal Information</div>
                                                        </div>

                                                        <div x-show="step === 3">
                                                            <div class="text-lg font-bold text-gray-700 leading-tight">
                                                                Confirmation</div>
                                                        </div>
                                                    </div>

                                                    <div class="flex items-center md:w-64">
                                                        <div class="w-full bg-white rounded-full mr-2">
                                                            <div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white"
                                                                :style="'width: ' + parseInt(step / 3 * 100) + '%'">
                                                            </div>
                                                        </div>
                                                        <div class="text-xs w-10 text-gray-600"
                                                            x-text="parseInt(step / 3 * 100) +'%'"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Top Navigation -->

                                            <!-- Step Content -->
                                            <div class="py-10">
                                                <div x-show.transition.in="step === 1">
                                                    <div class="grid gap-6 md:grid-cols-2">
                                                        <div class="col-span-2">
                                                            <label for="hotelname"
                                                                class="font-bold mb-1 text-gray-700 block">Hotel
                                                                Pick-Up</label>
                                                            <input type="text"
                                                                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                                placeholder="Enter your Hotel...">
                                                        </div>

                                                        <div>
                                                            <label for="date"
                                                                class="font-bold mb-1 text-gray-700 block">Date</label>
                                                            <input type="date"
                                                                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                                                        </div>

                                                        <div>
                                                            <label for="time"
                                                                class="font-bold mb-1 text-gray-700 block">Hour</label>
                                                            <input type="time"
                                                                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div x-show.transition.in="step === 2">
                                                    <div class="grid gap-6 md:grid-cols-4">
                                                        <div class="col-span-2">
                                                            <label for="fullname"
                                                                class="font-bold mb-1 text-gray-700 block">Full Name</label>
                                                            <input type="text"
                                                                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                                placeholder="Enter your Full Name...">
                                                        </div>

                                                        <div>
                                                            <label for="adults"
                                                                class="font-bold mb-1 text-gray-700 block">Adults</label>
                                                            <input type="number"
                                                                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                                                        </div>

                                                        <div>
                                                            <label for="childs"
                                                                class="font-bold mb-1 text-gray-700 block">Childs</label>
                                                            <input type="number"
                                                                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label for="email"
                                                                class="font-bold mb-1 text-gray-700 block">Email</label>
                                                            <input type="email"
                                                                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                                placeholder="Enter your Email...">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label for="phone"
                                                                class="font-bold mb-1 text-gray-700 block">Number Phone</label>
                                                            <input type="text"
                                                                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                                placeholder="Enter your Number Phone...">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div x-show.transition.in="step === 3">

                                                </div>
                                            </div>
                                            <!-- / Step Content -->
                                        </div>
                                    </div>

                                    <!-- Bottom Navigation -->
                                    <div class=" bottom-0 left-0 right-0" x-show="step != 'complete'">
                                        <div class="max-w-3xl mx-auto px-4">
                                            <div class="flex justify-between">
                                                <div class="w-1/2">
                                                    <button x-show="step > 1" @click="step--"
                                                        class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Previous</button>
                                                </div>

                                                <div class="w-1/2 text-right">
                                                    <button x-show="step < 3" @click="step++"
                                                        class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Next</button>

                                                    <button @click="step = 'complete'" x-show="step === 3"
                                                        class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Complete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
                                </div>

                                <script>
                                    function app() {
                                        return {
                                            step: 1,

                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </section>
</div>
