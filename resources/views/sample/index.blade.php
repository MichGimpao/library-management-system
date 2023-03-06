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
        <a href="{{ url('sample') }}"> BOOK LIST
      </button>
      <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
        <a href="{{ url('sample/add-book') }}">ADD BOOK</a>
      </button>
      {{-- <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
        <a href="{{ url('sample/edit-book') }}">EDIT BOOK</a>
      </button> --}}
      <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
        ISSUED/RETURNED BOOK
      </button>
    </nav>
  </div>
  <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Book ID</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Genre</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Book Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Book Author</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Publication Date</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Quantity</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>

        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @php
          $i = 1;
        @endphp
        @foreach ($data as $book)
          <tr class="hover:bg-gray-50">
            <td>{{ $book->id }}</td>
            <td>{{ $book->genre }}</td>
            <td>{{ $book->book_name }}</td>
            <td>{{ $book->book_author }}</td>
            <td>{{ $book->pub_date }}</td>
            <td>{{ $book->quantity }}</td>
            <td>
              {{-- <a href="{{ url('sample/1/edit') "> --}}
              {{-- <a href={{ 'sample/' . $book['id'] . '/edit' }}>
                <i class="fa-solid fa-pen-to-square mr-20">Edit</i></a> --}}
              <form action="{{ route('sample.destroy', ['sample' => $book['id'], '_method' => 'delete']) }}"
                method="Post">
                @csrf
                {{-- <form action="/sample/{{ $book->id }}" method="post"> --}}
                {{-- {{ method_field('destroy') }} --}}
                <a href={{ 'sample/' . $book['id'] . '/edit' }}>
                  <i class="fa-solid fa-pen-to-square mr-20">Edit</i></a>
                {{-- @method('DELETE') --}}
                <button type="submit" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash">Delete</i></button>
              </form>
              {{-- <form action="/sample/{{ $book->id }}" method="post">
                {{ method_field('destroy') }}
                <button class="btn btn-default" type="submit"><i class="fa-sharp fa-solid fa-trash">Delete</i></button>
              </form> --}}
              {{-- <a href='delete/{{ $book->id }}'> <i class="fa-sharp fa-solid fa-trash">Delete</i></a> --}}
            </td>

          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</x-app-layout>
