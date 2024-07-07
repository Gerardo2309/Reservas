<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Tour') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('tours.create') }}"method="POST" enctype="multipart/form-data" id="dropzone"
                    class="dropzone border-dashed border-2 w-full rounded p-0">
                    @csrf
                    <div class="bg-white grid gap-6  md:grid-cols-1 -m-2 p-2 border-dashed border-b-2">
                        <div>
                            <label for="name"
                                class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                            <input name="name" value="{{ old('name') }}" type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('name')
                                <p class="text-red-500 my-2 text-sm text-center">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="price"
                                class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tour
                                price</label>
                            <input name="price" value="{{ old('price') }}" type="text" id="price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="duration"
                                class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tour
                                duration</label>
                            <input name="duration" value="{{ old('duration') }}" type="text" id="duration"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="short_descrip"
                                class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Short
                                Description</label>
                            <textarea name="short_descrip" value="{{ old('short_descrip') }}" type="text" id="short_descrip"
                                rows="2"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                        <div>
                            <label for="description"
                                class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                            <textarea name="description" value="{{ old('description') }}" type="text" id="description"
                                rows="5"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                        <div>
                            <label for="maps"
                                class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Link of
                                maps</label>
                            <textarea name="maps" value="{{ old('maps') }}" type="text" id="maps"
                                rows="5"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                        <div class="group">
                            <label for="tipo_tour_id"
                                class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Type
                                Tour</label>
                            <select name="tipo_tour_id" value="{{ old('tipo_tour_id') }}" id="tipo_tour_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('tipo_tour_id') ? ' is-invalid' : null }}">
                                @if (count($ttours) > 0)
                                    @foreach ($ttours as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('tipo_tour_id')
                                <div class="invalid-feedback">{{ $errors->first('tipo_tour_id') }}</div>
                            @enderror

                        </div>
                        <div class="group">
                            <label for="route_tour_id"
                                class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Route
                                of
                                Tour</label>
                            <select name="route_tour_id[]" value="{{ old('route_tour_id') }}" id="tags"
                                multiple="multiple" style="width: 100%"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('route_tour_id') ? ' is-invalid' : null }}">
                                <option value="">{{ __('Selecciona un usuario') }}</option>
                                @if (count($rtours) > 0)
                                    @foreach ($rtours as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('route_tour_id')
                                <div class="invalid-feedback">{{ $errors->first('route_tour_id') }}</div>
                            @enderror

                        </div>
                        <div class="group">
                            <label for="additionals"
                                class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">What
                                Include?</label>
                            <select name="additionals[]" value="{{ old('additionals') }}" id="additionals"
                                multiple="multiple" style="width: 100%"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('additionals') ? ' is-invalid' : null }}">
                                <option value="">{{ __('Selecciona un usuario') }}</option>
                                @if (count($additionals) > 0)
                                    @foreach ($additionals as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('additionals')
                                <div class="invalid-feedback">{{ $errors->first('additionals') }}</div>
                            @enderror

                        </div>
                        @error('images')
                            <p class="text-red-500 my-2 text-sm text-center">
                                {{ $message }}
                            </p>
                        @enderror
                        <input type="hidden" name="images" value="{{ old('images') }}">
                    </div>
                    <x-button type="submit" class="submit">
                        Save
                    </x-button>
                </form>




                <script>
                    Dropzone.options.dropzone = {
                        autoProcessQueue: false,
                        uploadMultiple: true,
                        parallelUploads: 100,
                        maxFiles: 100,
                        paramName: "images",
                        init: function() {
                            var myDropzone = this;

                            // First change the button to actually tell Dropzone to process the queue.
                            this.element.querySelector(".submit").addEventListener("click", function(e) {
                                // Make sure that the form isn't actually being sent.
                                e.preventDefault();
                                e.stopPropagation();
                                myDropzone.processQueue();
                            });

                            // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                            // of the sending event because uploadMultiple is set to true.
                            this.on("sendingmultiple", function() {
                                // Gets triggered when the form is actually being sent.
                                // Hide the success button or the complete form.
                            });
                            this.on("successmultiple", function(files, response) {
                                // Gets triggered when the files have successfully been sent.
                                // Redirect user or notify of success.
                                window.location.href = "{{ route('tours.index')}}";
                            });
                            this.on("errormultiple", function(files, response) {
                                // Gets triggered when there was an error sending the files.
                                // Maybe show form again, and notify user of error
                            });
                        }
                    };
                    var values = $('#tags option[selected="true"]').map(function() {
                        return $(this).val();
                    }).get();

                    // you have no need of .trigger("change") if you dont want to trigger an event
                    $('#tags').select2();
                    $('#additionals').select2();
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
