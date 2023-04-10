@include('header.header')

<body class="antialiased">
    @include('header.nav')  
    <div class="bg-gray-900">
        <h1 class="bg-gray-900 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Popular now</h1>
    </div>

    @include('items')
</body>