<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create
    </x-slot>

    
<form method="POST" action="{{ route('organizations.store') }}" class="max-w-sm mx-auto">
  @csrf 
  <div class="mb-5">
    <label for="name" class="block mt-10 mb-2.5 text-sm font-medium text-heading text-gray-100">Your organization name</label>
    <input name="name" type="text" id="name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="My Organization" required />
  </div>

  <div class="mb-5">
    <label for="status" class="block mt-10 mb-2.5 text-sm font-medium text-heading text-gray-100">Organization status</label>
    <input name="status" type="text" id="status" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Active" required />
  </div>
  
  <label for="description" class="block mb-2.5 text-sm font-medium text-heading text-gray-100">Organization description</label>
  <textarea name="description" id="description" rows="4" class="mb-10 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body" placeholder="Write description here..."></textarea>

  <label for="remember" class="flex items-center mb-5">
    <input name="remember" id="remember" type="checkbox" value="" class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft" required />
    <p class="ms-2 text-sm font-medium text-heading select-none text-gray-100">I agree with the <a href="#" class="text-fg-brand hover:underline">terms and conditions</a>.</p>
  </label>
  <button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit</button>

</form>


</x-app-layout>