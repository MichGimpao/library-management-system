<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('LIBRARY INVENTORY SYSTEM') }}
    </h2>
  </x-slot>
  <!-- component -->
  <link rel="preconnect" href="https://rsms.me/">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <style>
    :root {
      font-family: 'Inter', sans-serif;
    }

    @supports (font-variation-settings: normal) {
      :root {
        font-family: 'Inter var', sans-serif;
      }
    }
  </style>
  <div class="bg-white">
    <nav class="flex flex-col sm:flex-row">
      <button
        class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
        <a href="{{ url('bookissued') }}"> ISSUED RECORD BOOK
      </button>
      <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
        <a href="{{ url('bookissued/create') }}">ADD ISSUED BOOK</a>
      </button>
    </nav>
  </div>
  <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
          {{-- <th scope="col" class="px-6 py-4 font-medium text-gray-900">Student ID</th> --}}
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Student Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Book ID</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Book Title</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">No. of Copies</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Release Date</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Due Date</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status </th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>

        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @foreach ($data as $bkissued)
          <tr class="hover:bg-gray-50">
            <td>{{ $bkissued->id }}</td>
            <td>{{ $bkissued['student']['fname'] . ' ' . $bkissued['student']['lname'] }}</td>
            {{-- <td>{{ $bkissued->stud_name }}</td> --}}
            <td>{{ $bkissued->book_id }}</td>
            <td>{{ $bkissued->bk_title }}</td>
            <td>{{ $bkissued->no_copies }}</td>
            <td>{{ $bkissued->release_date }}</td>
            <td>{{ $bkissued->due_date }}</td>
            <td>{{ $bkissued->status }}</td>
            <td>
              <form
                action="{{ route('bookissued.destroy', ['bookissued' => $bkissued['id'], '_method' => 'delete']) }}"
                method="Post">
                @csrf
                <a href={{ 'bookissued/' . $bkissued['id'] . '/edit' }}>
                  <i class="fa-solid fa-pen-to-square mr-20"></i></a>
                <i class="fa-sharp fa-solid fa-trash" type="submit"></i>
              </form>
            </td>

          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</x-app-layout>
