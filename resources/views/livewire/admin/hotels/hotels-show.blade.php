<div>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <div class=" p-5 flex justify-between items-center pb-4 bg-white dark:bg-gray-900">
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
                <input wire:model="search" type="text" id="table-search-hotels"
                    class="block mr-5 p-2 pl-10 sm:w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for hotels">
            </div>
        </div>

        @if ($hotels->count())
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6 w-9/12 md:w-auto">
                            NAME
                        </th>
                        <th scope="col" class="py-3 px-6 hidden md:table-cell">
                            ADDRESS
                        </th>
                        <th scope="col" class="py-3 px-6 hidden md:table-cell">
                            MAPS
                        </th>
                        <th scope="col" class="py-3 px-6 w-3/12 md:w-auto text-right">
                            <span>ACTIONS</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hotels as $hotel)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row"
                                class="flex items-center py-4 px-6 font-medium text-gray-900 dark:text-white">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $hotel->name }}</div>
                                    <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 md:hidden ">{{$hotel->address}}</p>
                                </div>
                            </td>
                            <td class="py-4 px-6 hidden md:table-cell">
                                {{ $hotel->address }}
                            </td>
                            <td class=" py-4 px-6 hidden md:table-cell">
                                <a href="{{ $hotel->position }}" target="_blank"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver
                                    Ubicacion</a>
                            </td>
                            <td class="py-4 px-6">

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $hotels->links('pagination-links') }}
        @else
            <div class="p-5 flex justify-between items-center pb-4 bg-white dark:bg-gray-900 dark:text-white">
                <strong>
                    No Hay Registros
                </strong>
            </div>

        @endif

    </div>
</div>
