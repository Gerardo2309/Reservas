<div>
    <button wire:click="$set('open', true)" type="button" class="p-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Create New Type</button>
    
    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            New Type Tour
        </x-slot>

        <x-slot name="content">


            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="name" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                        <input wire:model.defer="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
            
            </form>

        </x-slot>

        <x-slot name="footer">
            <x-danger-button class="py-2 px-4 shadow-md no-underline rounded-full text-white font-sans font-semibold text-sm hover:text-white hover:bg-red-500 focus:outline-none active:shadow-none" wire:click="$set('open', false)">
                Cancelar
            </x-danger-button >

            <button wire:click="create()" class="ml-3 py-2 px-4 shadow-md no-underline rounded-full bg-green-700 text-white font-sans font-semibold text-sm border-red hover:text-white hover:bg-green-500 focus:outline-none active:shadow-none">
                Guardar 
            </button>
        </x-slot>

    </x-dialog-modal>
</div>
