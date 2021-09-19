<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset ('css/app.css')}}" rel="stylesheet">
</head>
<body class="h-screen  flex items-center justify-center" style="background: #4e7a18;">
  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
      @else
          <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
          @endif
      @endauth
  </div>
@endif
<div class=" fixed top-10 left-0">
  <button class="w-full text-lg h-16 text-white font-extrabold bg-green-500"><a class=" w-full hover:text-red" href="{{route('book.create')}}">Ajouter</a></button>
</div>
    <!-- This is an example component -->
<div class=" mt-10 mb-50">
<main class="">
      <div class="text-4xl sm:text-5xl text-center my-10">What type of food do you like?</div>

      <div class="grid md:grid-cols-3 gap-8 m-5 max-w-5xl m-auto">
        
        <div class="bg-white">
          <img src="https://via.placeholder.com/150" alt="" class="w-full h-48 sm:h-56 object-cover" />

          <div class="px-10 py-6 mb-10 text-center">
            <div class="text-2xl font-bold text-purple-500 mb-4">MALAY</div>
            <span class="text-sm">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate tempore eligendi magnam distinctio molestias. Incidunt at consequuntur consequatur 
              officiis repudiandae! Culpa cum vel tenetur itaque eius provident voluptatum similique impedit?
            </span>
          </div>

          <button class="w-full text-lg h-16 text-white font-extrabold bg-purple-500"><a href="{{ route('book.create')}}">Ajouter</a></button>
        </div>

      </div>
    </main>
    
  </div>
</body>
</html>
