<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('LIBRARY INVENTORY SYSTEM') }}
        </h2>
    </x-slot>
<!-- component -->
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Genre</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Book Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Book Author</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Publication Date</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Quantity</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @php   
            $i =1;
        @endphp
            @foreach ($data as $book)
                <tr class="hover:bg-gray-50">
                    <td>{{$i}}</td>
                    <td>{{$book->genre}}</td>
                    <td>{{$book->book_name}}</td>
                    <td>{{$book->book_author}}</td>
                    <td>{{$book->pub_date}}</td>
                    <td>{{$book->quantity}}</td>
                </tr>
            @endforeach
        
      </tbody>
    </table>
  </div>
</x-app-layout>