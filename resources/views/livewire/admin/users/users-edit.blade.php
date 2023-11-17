<div>
    <div class="flex justify-end px-4 pt-4">
        <button id="dropdownButton{{ $user->id }}" data-dropdown-toggle="dropdown{{ $user->id }}"
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
        <div id="dropdown{{ $user->id }}"
            class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton{{ $user->id }}">
                <li>
                    <a wire:click="$set('open', true)"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                </li>
                <li>
                    <a wire:click="showConfirmation({{ $user->id }})"
                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                </li>
            </ul>
        </div>
    </div>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Editing User {{ $user->name }}
        </x-slot>

        <x-slot name="content">


            <form>
                <div class="grid gap-6 mb-6 sm:grid-cols-1 md:grid-cols-4">
                    <div class="md:col-span-3">
                        <x-label for="name">Name</x-label>
                        <x-input wire:model.defer="name" type="text" id="name" />
                    </div>
                    <div>
                        <x-label for="rol_id">Rol</x-label>
                        <select wire:model="rol_id" id="rol_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('agency_id') ? ' is-invalid' : null }}">
                            <option value="">{{ __('Selecciona un Rol') }}</option>
                            @if (count($roles) > 0)
                                @foreach ($roles as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    @if ($rol_id == 3)
                        <div class="md:col-span-2">
                            <x-label for="agency_id">Agency</x-label>
                            <select wire:model="agency_id" id="agency_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('agency_id') ? ' is-invalid' : null }}">
                                <option value="">{{ __('Selecciona una Agencia') }}</option>
                                @if (count($agencies) > 0)
                                    @foreach ($agencies as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <x-label for="hotel_id">Hotel</x-label>
                            <select wire:model.defer="hotel_id" id="hotel_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('agency_id') ? ' is-invalid' : null }}">
                                <option value="">{{ __('Selecciona un Hotel') }}</option>
                                @if (count($hotels) > 0)
                                    @foreach ($hotels as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    @endif


                    <div class="md:col-span-3">
                        <x-label for="email">Email</x-label>
                        <x-input wire:model.defer="email" type="email" id="email" />
                    </div>
                    <div>
                        <x-label for="phone">Phone</x-label>
                        <x-input wire:model.defer="phone" type="text" id="phone" />
                    </div>
                    <div class="md:col-span-2">
                        <x-label for="password">Password</x-label>
                        <x-input wire:model.defer="password" type="password" id="password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="md:col-span-2">
                        <x-label for="conpassword">Confirm Password</x-label>
                        <x-input name="password_confirmation" wire:model.defer="conpassword" type="password"
                            id="conpassword" />
                    </div>
                </div>

            </form>

        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:loading.remove wire:target="edit" wire:click="$set('open', false)">
                Cancelar
            </x-danger-button>

            <x-button wire:click="edit" wire:loading.attr="disabled" wire:target="edit">
                Guardar
            </x-button>
            <div wire:loading wire:target="edit" class="px-4 py-2 m-2 dark:text-white">
                Saving Data...
            </div>
        </x-slot>

    </x-dialog-modal>
</div>
