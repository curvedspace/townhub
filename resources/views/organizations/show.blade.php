<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $organization->name }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $organization->description }}
                </div>
            </div>
        </div>
    </div>

     <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-4 p-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                @if ($organization->website)
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        Web: {{ $organization->website }}
                    </div>
                @endif
            
            
                    @if ($organization->email)
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        Email: {{ $organization->email }}
                    </div>
                @endif
                
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-4 p-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $organization->placard }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
