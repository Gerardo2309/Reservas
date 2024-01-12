<nav x-data="{ open: false }" class="bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-gray-800">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @can('admin.agencies.index')
                        <x-nav-link href="{{ route('agencies.index') }}" :active="request()->routeIs('agencies.index')">
                            {{ __('Agencies') }}
                        </x-nav-link>
                    @endcan

                    @can('admin.tours.index')
                        <x-nav-link href="{{ route('tours.index') }}" :active="request()->routeIs('tours.index')">
                            {{ __('Tours') }}
                        </x-nav-link>
                    @endcan
                    
                    @can('admin.users.index')
                        <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                            {{ __('Users') }}
                        </x-nav-link>
                    @endcan

                    @can('admin.hotels.index')
                        <x-nav-link href="{{ route('hotels.index') }}" :active="request()->routeIs('hotels.index')">
                            {{ __('Hotels') }}
                        </x-nav-link>
                    @endcan
                    @if (auth()->user()->hasRole('Admin'))
                    <x-dropdown>
                        <x-slot name="trigger">
                            {{ __('Setting') }}
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('type-tours.index') }}" :active="request()->routeIs('type-tours.index')">
                                {{ __('Type tour') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('additionals.index') }}" :active="request()->routeIs('additionals.index')">
                                {{ __('Additionals') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('routes.index') }}" :active="request()->routeIs('routes.index')">
                                {{ __('Routes') }}
                            </x-dropdown-link>
                        </x-slot>

                    </x-dropdown>
                    @endif
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown aling="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-900 hover:text-gray-700 dark:hover:text-gray-200 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-950 active:bg-gray-50 dark:active:bg-gray-950 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200 dark:border-gray-700"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->

    <!-- drawer component -->
    <div id="drawer-navigation"
        class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-navigation-label">

        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ Auth::user()->profile_photo_url }}"
                    alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</span>

            </div>
            <ul class="space-y-2 font-medium">
                <li>
                    <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                </li>
                <li>
                    @can('admin.agencies.index')
                        <x-responsive-nav-link href="{{ route('agencies.index') }}" :active="request()->routeIs('agencies.index')">
                            {{ __('Agencies') }}
                        </x-responsive-nav-link>
                    @endcan
                </li>
                <li>
                    @can('admin.tours.index')
                        <x-responsive-nav-link href="{{ route('tours.index') }}" :active="request()->routeIs('tours.index')">
                            {{ __('Tours') }}
                        </x-responsive-nav-link>
                    @endcan
                </li>
                <li>
                    @can('admin.users.index')
                        <x-responsive-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                            {{ __('Users') }}
                        </x-responsive-nav-link>
                    @endcan
                </li>
                <li>

                    @can('admin.hotels.index')
                        <x-responsive-nav-link href="{{ route('hotels.index') }}" :active="request()->routeIs('hotels.index')">
                            {{ __('Hotels') }}
                        </x-responsive-nav-link>
                    @endcan
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Settings</span>
                    </a>
                </li>
                <li>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </li>
            </ul>
        </div>
    </div>


</nav>
