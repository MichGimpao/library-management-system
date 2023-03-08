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
        <h2><b>Student Profile</h2>
        <br>
        <form method="POST" action="{{ url('student') }}">
          @csrf
          <div>
            <x-input-label for="stud_id" :value="__('Student ID')" />
            <x-text-input id="stud_id" class="block mt-1 w-full" type="text" name="stud_id" :value="old('stud_id')" required
              autofocus autocomplete="stud_id" />
            <x-input-error :messages="$errors->get('stud_id')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="fname" :value="__('First Name')" />
            <x-text-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')"
              required autofocus autocomplete="fname" />
            <x-input-error :messages="$errors->get('fname')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="lname" :value="__('Last Name')" />
            <x-text-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')"
              required autofocus autocomplete="lname" />
            <x-input-error :messages="$errors->get('lname')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="gender" :value="__('Gender ')" />
            <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')"
              required autofocus autocomplete="gender" />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="course" :value="__('Course')" />
            <x-text-input id="course" class="block mt-1 w-full" type="text" name="course" :value="old('course')"
              required autofocus autocomplete="course" />
            <x-input-error :messages="$errors->get('course')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="year_block" :value="__('Year/Block')" />
            <x-text-input id="year_block" class="block mt-1 w-full" type="text" name="year_block" :value="old('year_block')"
              required autofocus autocomplete="year_block" />
            <x-input-error :messages="$errors->get('year_block')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="stud_address" :value="__('Student Address')" />
            <x-text-input id="stud_address" class="block mt-1 w-full" type="text" name="stud_address"
              :value="old('stud_address')" required autofocus autocomplete="stud_address" />
            <x-input-error :messages="$errors->get('stud_address')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="stud_contactno" :value="__('Student Contact No.')" />
            <x-text-input id="stud_contactno" class="block mt-1 w-full" type="text" name="stud_contactno"
              :value="old('stud_contactno')" required autofocus autocomplete="stud_contactno" />
            <x-input-error :messages="$errors->get('stud_contactno')" class="mt-2" />
          </div>
          <div>
            <x-input-label for="stud_email" :value="__('Student Email Address')" />
            <x-text-input id="stud_email" class="block mt-1 w-full" type="text" name="stud_email" :value="old('stud_email')"
              required autofocus autocomplete="stud_email" />
            <x-input-error :messages="$errors->get('stud_email')" class="mt-2" />
          </div>
          <br>

          <button class="btn btn-primary ml-20 mr-8" type="submit"><i class="fa-solid fa-square-plus"></i> Add
            Student</button>

          <button class="btn btn-danger ml-20"><a href="{{ url('student') }}"><i
                class="fa-regular fa-rectangle-xmark"></i>Cancel</a></button>

        </form>
      </div>
    </div>
  </section>
</x-app-layout>
