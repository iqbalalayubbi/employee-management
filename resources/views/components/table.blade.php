<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
      <thead>
        <tr class="bg-gray-200">
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">ID</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Name</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Email</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Address</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Phone</th>
          <th class="py-3 px-6 text-center text-sm font-medium text-gray-700 uppercase">Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach($employees as $employee)
      <tr class="hover:bg-gray-100">
        <td class="py-4 px-6 text-gray-700">{{ $employee->id }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $employee->name }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $employee->email }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $employee->address }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $employee->phone }}</td>
        <td class="py-4 px-6 text-center">
          <a href="{{ route('employees.edit', $employee->id) }}" 
             class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-1 px-3 rounded">
            Edit
          </a>
          <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" 
                    class="bg-red-500 hover:bg-red-600 text-white font-medium py-1 px-3 rounded">
              Delete
            </button>
          </form>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>