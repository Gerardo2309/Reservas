<div>

    <button wire:click="$set('open', true)" type="button"
        class="p-2 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">New Route</button>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            New Route
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
                        <label for="description"
                            class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                        <textarea wire:model.defer="description" type="text" id="description"
                            rows="5"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    <div class="mb-6 pt-4">
                        <label for="file" class="mb-5 block text-xl font-semibold text-[#07074D]">
                            Upload File
                        </label>

                        <div class="mb-8">
                            <input type="file" wire:model.defer="file" multiple id="file" class="sr-only" />
                            <label for="file"
                                class="relative flex min-h-[100px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                <div>
                                    <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                        Drop files here
                                    </span>
                                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                        Or
                                    </span>
                                    <span
                                        class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                        Browse
                                    </span>
                                </div>
                            </label>
                        </div>

                        <h1 class="pt-6 pb-3 font-semibold sm:text-lg text-gray-900">
                            To Upload
                        </h1>

                        @if ($file)
                            <div class="grid grid-cols-4 sm:grid-cols-6 gap-4">
                                @foreach ($file as $photo)
                                    <article
                                        class="w-20 h-20 rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                        <img alt="upload preview" src="{{ $photo->temporaryUrl() }}"
                                            class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                                        <section
                                            class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                            <h1 class="flex-1"></h1>
                                            <div class="flex">
                                                <span class="p-1">
                                                    <i>
                                                        <svg class="fill-current w-4 h-4 ml-auto pt-"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24">
                                                            <path
                                                                d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                                        </svg>
                                                    </i>
                                                </span>

                                                <p class="p-1 size text-xs"></p>
                                                <div wire:key="{{ $loop->index }}">

                                                    <button type="button" wire:click="removeMe({{ $loop->index }})"
                                                        class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                                        <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24">
                                                            <path class="pointer-events-none"
                                                                d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </section>
                                    </article>
                                @endforeach
                            </div>
                        @else
                            <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                                <li id="empty"
                                    class="h-full w-full text-center flex flex-col items-center justify-center ">
                                    <img class="mx-auto w-32"
                                        src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png"
                                        alt="no data" />
                                    <span class="text-small text-gray-500">No files selected</span>
                                </li>
                            </ul>
                        @endif
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


</div>