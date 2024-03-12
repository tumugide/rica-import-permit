<div class="mb-6 w-80">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>

    <select id="countries"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5"
        name="{{ $name }}">
        @if ($items){
            <option selected disabled>{{ $placeh }}</option>
            @foreach ($items as $item)
                <option value={{ $item }}>{{ $item }}</option>
            @endforeach
            }
        @endif
    </select>
</div>
