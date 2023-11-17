<x-guest-layout>

    <!-- component -->
    <div class="relative bg-no-repeat bg-cover bg-center py-10 lg:p-0"
        style="background-image: url(https://www.shoppingcancun.com/wp-content/themes/yootheme/cache/09/slide_01_shopping_cancun-09b87b46.webp);">
        <div class="w-full min-h-full button-0 top-0 absolute opacity-60 bg-black"></div>
        <div class="relative">
            <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
                <div class="flex-col flex  self-center sm:max-w-xl xl:max-w-2xl">
                    <div class="self-start hidden lg:flex flex-col  text-white">
                        <x-authentication-card-logo class="mb-3" />
                        <h1 class="mb-3 font-bold text-5xl">Welcome to International Jewelry Center & Outlet Shopping
                            Mall
                        </h1>
                        <p class="pr-3">Lorem ipsum is placeholder text commonly used in the graphic, print,
                            and publishing industries for previewing layouts and visual mockups</p>
                    </div>
                </div>
                <div class="flex justify-center self-center">
                    <div class="p-12 bg-white dark:bg-slate-800 mx-auto rounded-2xl w-100 ">
                        <x-authentication-card-logo class="lg:hidden mb-10 mx-auto" />

                        <div class="mb-4">
                            <h3 class="font-semibold text-2xl text-gray-800">Sign In </h3>
                            <p class="text-gray-500">Please sign in to your account.</p>
                        </div>
                        <div class="space-y-5">
                            <x-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <x-label for="email" value="{{ __('Email') }}" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="password" value="{{ __('Password') }}" />
                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                        required autocomplete="current-password" />
                                </div>

                                <div class="block mt-4">
                                    <label for="remember_me" class="flex items-center">
                                        <x-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    <x-button class="ml-4">
                                        {{ __('Log in') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                        <div class="pt-5 text-center text-gray-400 text-xs">
                            <span>
                                Copyright © 2023
                                <a href="https://geratix.com/" rel="" target="_blank" title="Ajimon"
                                    class="text-green hover:text-green-500 ">Geratix</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-guest-layout>
