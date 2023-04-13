<x-app-layout>
    <x-slot name="header">
      <div class="flex justify-between">
          <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Manipulate') }}
        </h2>

        <div class="buttons flex items-center">
             <a class="lms-btn mx-5" href="{{route('role.index')}}">Role and Permission</a>
             <a class="lms-btn" href="{{route('user.create')}}">Give Role User</a>
        </div>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                              <livewire:user-managment-index />

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
