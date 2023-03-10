<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('LIBRARY INVENTORY SYSTEM') }}
    </h2>
  </x-slot>


  <div class="mt-20">
    <div class="grid grid-cols-2 grid-rows-2 ml-10 mr-10 gap-2 h-[50rem] ">

      <a href="{{ url('sample') }}"
        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl 
          from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 
          rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] 
          transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 
          bg-cover bg-[url('/public/build/assets/images/2.jpg')]">
      </a>

      <a href="{{ url('student') }}"
        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50
         via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl 
         shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250
          focus:outline focus:outline-2 focus:outline-red-500  bg-cover bg-[url('/public/build/assets/images/3.png')]">
      </a>
    </div>
  </div>
</x-app-layout>
