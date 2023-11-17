<div>
    <div class="flex justify-end px-4 pt-4">
        <button id="dropdownButton{{ $hotel->id }}" data-dropdown-toggle="dropdown{{ $hotel->id }}"
            class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
            type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                </path>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown{{ $hotel->id }}"
            class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton{{ $hotel->id }}">
                <li class="md:hidden">
                    <a href="{{ $hotel->position }}" target="_blank"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">See
                        location</a>
                </li>
                <li>
                    <a wire:click="$set('open', true)"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                </li>
                <li>
                    <a wire:click="showConfirmation({{ $hotel->id }})"
                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                </li>
            </ul>
        </div>
    </div>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Editando Hotel {{ $hotel->name }}
        </x-slot>

        <x-slot name="content">


            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="name"
                            class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                        <input wire:model.defer="name" type="text" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div>
                        <label for="address"
                            class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
                        <input wire:model.defer="address" type="text" id="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div>
                        <label for="position"
                            class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Position</label>
                        <input wire:model.defer="position" type="text" id="position"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

            </form>

        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:loading.remove wire:target="edit" wire:click="$set('open', false)"
            class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                Cancelar
            </x-danger-button>

            <button wire:click="edit" wire:loading.attr="disabled" wire:target="edit"
            class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline disabled:opacity-25">
                Guardar
            </button>
            <div wire:loading wire:target="edit" class="px-4 py-2 m-2 dark:text-white">
                Saving Data...
            </div>
        </x-slot>

    </x-dialog-modal>
</div>
