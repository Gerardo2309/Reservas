<div>
    <div class="pb-10 overflow-x-auto relative shadow-md mx-auto">
        <div class="px-4 sm:px-6 xl:px-36 p-5 flex justify-between items-center pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input wire:model="search" type="text" id="table-search-routes"
                    class="block p-2 pl-10 w-40 sm:w-80  text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for routes">
            </div>

            <div>
                @can('admin.tours.create')<!--cambiar a route-->
                    @livewire('admin.routes.routes-create')
                @endcan
            </div>
        </div>



        @if ($routes->count())
            <section class="py-10">
                <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($routes as $route)
                        <article
                            class="relative rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                            <a href="" class="h-full flex flex-col">
                                <div class="relative flex items-end overflow-hidden rounded-xl">
                                    <img class="w-full h-full" src="{{ asset($route->image->url ?? '') }}" alt="{{ $route->name }}" />
                                </div>

                                <div class="h-full mt-1 p-2 flex flex-col justify-between flex-1">
                                    <header>
                                        <h2 class="text-black">{{ $route->name }}</h2>
                                        <p class="mb-3 text-justify font-normal text-ellipsis max-h-[150px] overflow-hidden  text-gray-400 dark:text-gray-400"
                                            style="   display: -webkit-box;
                                            -webkit-line-clamp: 7;
                                            -webkit-box-orient: vertical;">
                                            {{ $route->description }}</p>
                                    </header>
                                    <div class="mt-3 flex items-end justify-between">
                                        <div
                                            class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">

                                            <button class="text-sm">Read More</button>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            </section>

            {{ $routes->links('pagination-links') }}
        @else
            <div class="p-5 flex justify-between items-center pb-4 bg-white dark:bg-gray-900 dark:text-white">
                <strong>
                    No Hay Registros
                </strong>
            </div>
        @endif

    </div>
</div>