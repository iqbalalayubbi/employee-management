<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Table</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">

  <div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4 text-center">Employee Management</h1>

    {{ dd($employees) }}
    <x-table :employees="$employees"></x-table>
  </div>

</body>
</html>
