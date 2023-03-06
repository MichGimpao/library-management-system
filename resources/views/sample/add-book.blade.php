<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('LIBRARY INVENTORY SYSTEM') }}
    </h2>
  </x-slot>

  <!-- component -->
  <section class="bg-white:250">
    <div class="grid min-h-screen place-items-center">
      <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
        <h2>ADD BOOK</h2>
        <form method="POST" action="{{ url('sample') }}">
          @csrf
          <div>
            <x-input-label for="genre" :value="__('Genre')" />
            <x-text-input id="genre" class="block mt-1 w-full" type="text" name="genre" :value="old('genre')" required
              autofocus autocomplete="genre" />
            <x-input-error :messages="$errors->get('genre')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="book_name" :value="__('Book Name')" />
            <x-text-input id="book_name" class="block mt-1 w-full" type="text" name="book_name" :value="old('book_name')"
              required autofocus autocomplete="book_name" />
            <x-input-error :messages="$errors->get('book_name')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="book_author" :value="__('Book Author')" />
            <x-text-input id="book_author" class="block mt-1 w-full" type="text" name="book_author" :value="old('book_author')"
              required autofocus autocomplete="book_author" />
            <x-input-error :messages="$errors->get('book_author')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="pub_date" :value="__('Publication Date')" />
            <x-text-input id="pub_date" class="block mt-1 w-full" type="text" name="pub_date" :value="old('pub_date')"
              required autofocus autocomplete="pub_date" />
            <x-input-error :messages="$errors->get('pub_date')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="quantity" :value="__('Quantity')" />
            <x-text-input id="quantity" class="block mt-1 w-full" type="text" name="quantity" :value="old('quantity')"
              required autofocus autocomplete="quantity" />
            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
          </div>
          <br>

          <button class="btn btn-primary ml-20 mr-8" type="submit"><i class="fa-solid fa-square-plus"></i> Add
            Books</button>

          <button class="btn btn-danger ml-20"><a href="{{ url('sample') }}"><i
                class="fa-regular fa-rectangle-xmark"></i>Cancel</a></button>

        </form>
      </div>
    </div>
  </section>
</x-app-layout>
