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
        <a href="{{ url('student') }}"> STUDENT LIST
      </button>
      <button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
        <a href="{{ url('student/create') }}">ADD STUDENT</a>
      </button>
    </nav>
  </div>
  <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Student ID</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">First Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Last Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Gender</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Course</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Block and Year</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Contact Address</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Student Email</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Contact Number</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>

        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @foreach ($data as $student)
          <tr class="hover:bg-gray-50">
            <td>{{ $student->id }}</td>
            <td>{{ $student->stud_id }}</td>
            <td>{{ $student->fname }}</td>
            <td>{{ $student->lname }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->year_block }}</td>
            <td>{{ $student->stud_address }}</td>
            <td>{{ $student->stud_email }}</td>
            <td>{{ $student->stud_contactno }}</td>
            <td>
              <form action="{{ route('student.destroy', ['student' => $student['id'], '_method' => 'delete']) }}"
                method="Post">
                @csrf
                <a href={{ 'student/' . $student['id'] . '/edit' }}>
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
