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
      {{-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#vertically-centered">

        Vertically centered
      </button>

      <x-modal id="vertically-centered" title="Vertically centered" :centered="true">
        <x-slot name="body">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
          sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </x-slot>
        <x-slot name="footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </x-slot>
      </x-modal>
      {{-- <a href="{{ url('student') }}" --}}
      {{-- class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div> --}}

      <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">BOOK ISSUED RECORD</h2>

      <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
        Laravel has wonderful documentation
      </p>
    </div>
    </a>

    <a href="{{ url('student') }}"
      class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
      <div>

        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">BOOK ISSUED RECORD</h2>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
          Laravel has wonderful documentation
        </p>
      </div>
    </a> --}}

  </div>
  </div>
</x-app-layout>
