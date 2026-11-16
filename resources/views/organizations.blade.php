<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Organizations') }} - find local businesses, non-profits and clubs.
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <ul class="hidden text-sm font-medium text-center text-body sm:flex -space-x-px">
                        <li class="w-full focus-within:z-10">
                            <a href="#" class="inline-block w-full text-body bg-neutral-primary-soft border border-default rounded-s-base hover:bg-neutral-secondary-medium hover:text-heading focus:ring-4 focus:ring-neutral-secondary-strong font-medium leading-5 text-sm px-4 py-2.5 focus:outline-none" aria-current="page">All</a>
                        </li>

                        @foreach ($organizationTypes as $organizationType)
                            <li class="w-full focus-within:z-10">
                                <a href="#" class="inline-block w-full text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-4 focus:ring-neutral-secondary-strong font-medium leading-5 text-sm px-4 py-2.5 focus:outline-none">
                                    {{ $organizationType->name }}
                                </a>
                            </li>
                        @endforeach
                        
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
