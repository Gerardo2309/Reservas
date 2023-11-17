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
                <input wire:model="search" type="text" id="table-search-agencies"
                    class="block mr-5 p-2 pl-10 sm:w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for agencies">
            </div>

            <div>
                @can('admin.agencies.create')
                    @livewire('admin.agencies.agencies-create')
                @endcan
            </div>
        </div>

        @if ($agencies->count())
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
                            MANAGER
                        </th>
                        <th scope="col" class="py-3 px-6 w-3/12 md:w-auto text-right">
                            <span>ACTIONS</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agencies as $agency)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row"
                                class="flex items-center py-4 px-6 font-medium text-gray-900 dark:text-white">
                                <div class="pl-3" data-popover-target="popover-agency-profile{{ $agency->id }}">
                                    <div class="text-base font-semibold">{{ $agency->name }}</div>
                                    <div class="hidden md:block font-normal text-gray-500">{{ $agency->phone }}</div>
                                    <div class="break-all font-normal text-gray-500">{{ $agency->email }}</div>

                                    <div data-popover id="popover-agency-profile{{ $agency->id }}" role="tooltip"
                                        class="md:hidden absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                                        <div class="p-3">
                                            <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
                                                {{ $agency->manager }}
                                            </p>
                                            <p class="mb-2 text-sm">{{ $agency->phone }} </p>
                                            <p class="mb-2 text-sm">{{ $agency->address }} </p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>

                                </div>
                            </td>
                            <td class="py-4 px-6 hidden md:table-cell">
                                {{ $agency->address }}
                            </td>
                            <td class="py-4 px-6 hidden md:table-cell">
                                {{ $agency->manager }}
                            </td>
                            <td class="py-4 px-6">
                                @can('admin.agencies.edit')
                                    @livewire('admin.agencies.agencies-edit', ['agency' => $agency], key($agency->id))
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $agencies->links('pagination-links') }}
        @else
            <div class="p-5 flex justify-between items-center pb-4 bg-white dark:bg-gray-900 dark:text-white">
                <strong>
                    No Hay Registros
                </strong>
            </div>

        @endif

    </div>
</div>
