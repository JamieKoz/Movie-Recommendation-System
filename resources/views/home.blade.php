@include('header.header')

<body class="antialiased bg-gray-900">
    @include('header.nav')
    <form method="GET" action="{{route('search')}}" class="flex justify-center">

      <input type="text" name="query" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 max-w-lg" placeholder="What films do you like?" required>
      <button class="text-white bg-gray-500 rounded p-2 ml-2" type="submit">Search</button>

  </form>

  <h1 class="py-4 text-center my-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Release Radar</h1>
@include('items')

</body>
