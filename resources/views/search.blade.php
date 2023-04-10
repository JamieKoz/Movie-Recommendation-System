@include('header.header')

<body class="antialiased bg-gray-900">
    @include('header.nav')
    <h1 class="bg-gray-900 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white my-4">Search</h1>
 <!-- Search Form -->
 <form method="GET" action="{{route('search')}}" class="flex justify-center">
    <input type="text" name="query" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 max-w-lg" placeholder="Search for a film" required>
    <button class="text-white bg-gray-500 rounded p-2 ml-2" type="submit">Search</button>
</form>
@include('items')
</body>