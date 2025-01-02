<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
      <thead>
        <tr class="bg-gray-200">
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Name</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Month</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Year</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Basic Salary</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Bonus</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">BPJS</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">JP</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Loan</th>
          <th class="py-3 px-6 text-left text-sm font-medium text-gray-700 uppercase">Total Salary</th>
          <th class="py-3 px-6 text-center text-sm font-medium text-gray-700 uppercase">Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach($salaries as $salary)
      <tr class="hover:bg-gray-100">
        <td class="py-4 px-6 text-gray-700">{{ $salary->employee->name }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $salary->month }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $salary->year }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $salary->basic_salary }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $salary->bonus }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $salary->bpjs }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $salary->jp }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $salary->loan }}</td>
        <td class="py-4 px-6 text-gray-700">{{ $salary->total_salary }}</td>
        <td class="py-4 px-6 text-center">
          <a href="{{ route('employees.edit', $salary->id) }}" 
             class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-1 px-3 rounded">
            Edit
          </a>
          <form action="{{ route('employees.destroy', $salary->id) }}" method="POST" class="inline-block">
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