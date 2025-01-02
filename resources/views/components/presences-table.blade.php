<div class="overflow-x-auto my-5">
    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
      <thead>
        <tr class="bg-gray-200">
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Name</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Check In</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Check Out</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Late In</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Early Out</th>
          <th class="py-3 px-6 text-center text-sm font-medium text-gray-700 uppercase">Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach($presences as $presence)
      <tr class="hover:bg-gray-100">
        <td class="py-4 px-6 text-gray-700">{{ $presence->employee->name }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $presence->check_in }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $presence->check_out }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $presence->late_in }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $presence->early_out }}</td>
        <td class="py-4 px-6 text-center">
          <a href="{{ route('employees-presences.edit', $presence->id) }}" 
             class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-1 px-3 rounded">
            Edit
          </a>
          <form action="{{ route('employees-presences.destroy', $presence->id) }}" method="POST" class="inline-block">
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