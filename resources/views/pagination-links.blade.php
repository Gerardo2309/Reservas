@if ($paginator->hasPages())
    <div class="flex justify-center">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px">
                <!-- prev -->
                @if ($paginator->onFirstPage())
                    <span
                        class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 ml-0 rounded-l-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev"
                        class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 ml-0 rounded-l-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white shadow cursor-pointer">
                        {!! __('pagination.previous') !!}
                    </button>
                @endif
                <!-- prev end -->

                <!-- numbers -->
                @foreach ($elements as $element)
                    <div class="flex">
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="bg-blue-50 border border-gray-300 text-blue-600 hover:bg-blue-100 hover:text-blue-700  py-2 px-3 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
                                        wire:click="gotoPage({{ $page }})">{{ $page }}</li>
                                @else
                                    <li class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                        wire:click="gotoPage({{ $page }})">{{ $page }}</li>
                                @endif
                            @endforeach
                        @endif
                    </div>
                @endforeach
                <!-- end numbers -->


                <!-- next  -->
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next"
                        class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 rounded-r-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white shadow cursor-pointer">
                        {!! __('pagination.next') !!}
                    </button>
                @else
                    <span
                        class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 rounded-r-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
                <!-- next end -->
            </ul>
        </nav>
    </div>
@endif
