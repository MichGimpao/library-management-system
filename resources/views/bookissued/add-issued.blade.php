<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('LIBRARY INVENTORY SYSTEM') }}
    </h2>
  </x-slot>

  <!-- component -->
  <section class="bg-white:250 mt-10">
    <div class="grid min-h-screen place-items-center">
      <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 ">
        <h2><b>ADD ISSUED BOOK</h2>
        <br>
        <form method="POST" action="{{ url('bookissued') }}">
          @csrf
          <div>
            <label>Student Name</label>
            <select name="stud_id" id=""
              class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 
              px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
              @foreach ($students as $student)
                <option value="{{ $student['id'] }}">
                  {{ $student['fname'] . ' ' . $student['lname'] }}
                </option>
              @endforeach
            </select>
            <div>
              <label>Book Name</label>
              <select name="book_id" id=""
                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 
                px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                @foreach ($sample_l_s_m as $SampleLSM)
                  <option value="{{ $SampleLSM['id'] }}">
                    {{ $SampleLSM['book_name'] }}
                  </option>
                @endforeach
              </select>
              {{-- <x-input-label for="book_id" :value="__('Book ID')" />
              <x-text-input id="book_id" class="block mt-1 w-full" type="text" name="book_id" :value="old('book_id')"
                required autofocus autocomplete="book_id" />
              <x-input-error :messages="$errors->get('book_id')" class="mt-2" /> --}}
            </div>
            {{-- <div>
              <x-input-label for="bk_title" :value="__('Book Title ')" />
              <x-text-input id="bk_title" class="block mt-1 w-full" type="text" name="bk_title" :value="old('bk_title')"
                required autofocus autocomplete="bk_title" />
              <x-input-error :messages="$errors->get('bk_title')" class="mt-2" />
            </div> --}}
            <div>
              <x-input-label for="no_copies" :value="__('No. of Copies')" />
              <x-text-input id="no_copies" class="block mt-1 w-full" type="text" name="no_copies" :value="old('no_copies')"
                required autofocus autocomplete="no_copies" />
              <x-input-error :messages="$errors->get('no_copies')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="release_date" :value="__('Release Date')" />
              <x-text-input id="release_date" class="block mt-1 w-full" type="date" name="release_date"
                :value="old('release_date')" required autofocus autocomplete="release_date" />
              <x-input-error :messages="$errors->get('release_date')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="due_date" :value="__('Due Date')" />
              <x-text-input id="due_date" class="block mt-1 w-full" type="date" name="due_date" :value="old('due_date')"
                required autofocus autocomplete="due_date" />
              <x-input-error :messages="$errors->get('due_date')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="status" :value="__('Status')" />
              <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')"
                required autofocus autocomplete="status" />
              <x-input-error :messages="$errors->get('status')" class="mt-2" />
            </div>
            <br>

            <button class="btn btn-primary ml-20 mr-8" type="submit"><i class="fa-solid fa-square-plus"></i>
              Add</button>

            <button class="btn btn-danger ml-20"><a href="{{ url('bookissued') }}"><i
                  class="fa-regular fa-rectangle-xmark"></i>Cancel</a></button>

        </form>
      </div>
    </div>
  </section>
</x-app-layout>
