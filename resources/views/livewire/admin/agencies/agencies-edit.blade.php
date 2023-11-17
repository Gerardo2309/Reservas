<div>
    <div class="flex justify-end px-4">
        <button id="dropdownButton{{ $agency->id }}" data-dropdown-toggle="dropdown{{ $agency->id }}"
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
        <div id="dropdown{{ $agency->id }}"
            class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton{{ $agency->id }}">
                <li>
                    <a href="{{route('hotels.show',$agency->id)}}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">See hotels</a>
                </li>
                <li>
                    <a wire:click="$set('open', true)"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                </li>
                <li>
                    <a wire:click="showConfirmation({{ $agency->id }})"
                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                </li>
            </ul>
        </div>
    </div>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Editing Agency {{ $agency->name }}
        </x-slot>

        <x-slot name="content">


            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <x-label for="name">Name</x-label>
                        <x-input wire:model.defer="name" type="text" id="name" />
                    </div>
                    <div>
                        <x-label for="email">Email</x-label>
                        <x-input wire:model.defer="email" type="email" id="email" />
                    </div>
                    <div>
                        <x-label for="address">Address</x-label>
                        <x-input wire:model.defer="address" type="text" id="address" />
                    </div>
                    <div>
                        <x-label for="phone">Phone</x-label>
                        <x-input wire:model.defer="phone" type="text" id="phone" />
                    </div>
                    <div>
                        <x-label for="manager">Manager</x-label>
                        <x-input wire:model.defer="manager" type="text" id="manager" />
                    </div>
                </div>
            </form>

        </x-slot>

        <x-slot name="footer">

            <x-danger-button wire:loading.remove wire:target="edit" wire:click="$set('open', false)">
                Cancel
            </x-danger-button>

            <x-button wire:click="edit" wire:loading.attr="disabled" wire:target="edit">
                Save
            </x-button>
            <div wire:loading wire:target="edit" class="px-4 py-2 m-2 dark:text-white">
                Saving Data...
            </div>

        </x-slot>

    </x-dialog-modal>
</div>
