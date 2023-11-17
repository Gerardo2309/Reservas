<div>
    <button wire:click="$set('open', true)" type="button"
        class="p-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Create
        New User</button>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            New User
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
                                    @foreach ($hotels as $hotel)
                                        <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
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
            <x-danger-button wire:loading.remove wire:target="create" wire:click="$set('open', false)">
                Cancelar
            </x-danger-button>

            <x-button wire:click="create" wire:loading.attr="disabled" wire:target="create">
                Guardar
            </x-button>
            <div wire:loading wire:target="create" class="px-4 py-2 m-2 dark:text-white">
                Saving Data...
            </div>
        </x-slot>

    </x-dialog-modal>
</div>
