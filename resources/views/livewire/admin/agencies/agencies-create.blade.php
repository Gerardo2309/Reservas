<div>
    <button wire:click="$set('open', true)" type="button"
        class="p-2 px-5 mr-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">New
        Agency</button>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            New Agency
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
                    <div wire:ignore>
                        <x-label for="hotel_id">Hotels</x-label>
                        <select wire:model.defer="hotel_id" class="w-full" id="select2-hotels"
                            data-placeholder="Select one or more hotels..." data-allow-clear="false"
                            multiple="multiple">
                            @if (count($hotels) > 0)
                                @foreach ($hotels as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div wire:ignore>
                        <x-label for="tour_id">Tours</x-label>
                        <select wire:model.defer="tour_id" class="w-full" id="select2-tours"
                            data-placeholder="Select one or more Tours..." data-allow-clear="false" multiple="multiple">
                            @if (count($tours) > 0)
                                @foreach ($tours as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                </div>
            </form>

        </x-slot>

        <x-slot name="footer">

            <x-danger-button wire:loading.remove wire:target="create" wire:click="$set('open', false)">
                Cancel
            </x-danger-button>

            <x-button wire:click="create" wire:loading.attr="disabled" wire:target="create">
                Save
            </x-button>
            <div wire:loading wire:target="create" class="px-4 py-2 m-2 dark:text-white">
                Saving Data...
            </div>

        </x-slot>

    </x-dialog-modal>


    <script>
        $(document).ready(function() {
            $('#select2-hotels').select2({
                width: '100%'
            });
            $('#select2-tours').select2({
                width: '100%'
            });
            $('#select2-hotels').on('change', function(e) {
                var data = $('#select2-hotels').select2("val");
                @this.set('hotel_id', data);
            });
            $('#select2-tours').on('change', function(e) {
                var data = $('#select2-tours').select2("val");
                @this.set('tour_id', data);
            });
        });
    </script>

</div>
