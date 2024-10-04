<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <br>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button class="bg-gray-600 dark:bg-gray-600 inline-flex items-center justify-center p-4 rounded-md text-white hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        {{ link_to_route('items.index', 'Items Management') }}
                    </button>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button class="bg-gray-600 dark:bg-gray-600 inline-flex items-center justify-center p-4 rounded-md text-white hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        {{ link_to_route('category.index', 'Category Management') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
