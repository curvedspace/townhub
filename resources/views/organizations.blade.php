<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Organizations') }} - find local businesses, non-profits and clubs.

               <button type="button" class="text-white bg-brand box-border border hover:bg-brand-strong 
               focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 
               ml-8 focus:outline-none">Register Yours</button>

        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <ul class="hidden text-sm font-medium text-center text-body sm:flex -space-x-px">
                        <li class="w-full focus-within:z-10">
                            <a href="#" class="inline-block w-full text-body bg-neutral-primary-soft border border-default rounded-s-base hover:bg-neutral-secondary-medium hover:text-heading focus:ring-4 focus:ring-neutral-secondary-strong font-medium leading-5 text-sm px-4 py-2.5 focus:outline-none" aria-current="page">Mine</a>
                        </li>
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


        @foreach ($organizations as $organization)                 

            <div class="text-gray-900 dark:text-gray-100 mt-8 mx-auto bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs">
                
                <a href="#">
                    <img class="rounded-base" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <a href="#">
                    <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading">{{ $organization->name }}</h5>
                </a>
                <p class="mb-6 text-body"> {{ $organization->description }} </p>
                <a href="/orgs/{{ $organization->id }}" class="inline-flex items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                    
                    Read more           
                    <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                    
                </a>
            
            </div>


        @endforeach

    </div>
</x-app-layout>
