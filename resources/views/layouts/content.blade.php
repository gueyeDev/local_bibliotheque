<div class=" fixed top-10 left-0">
    <button class="w-full text-lg h-16 text-white font-extrabold bg-green-500"><a class=" w-full hover:text-red" href="{{route('book.create')}}">Ajouter</a></button>
  </div>
      <!-- This is an example component -->
  <div class=" mt-10 mb-50">
  <main class="">
        <div class="text-4xl sm:text-5xl text-center my-10">What type of food do you like?</div>
        @foreach ($book as $books)
            
        
        <div class="grid md:grid-cols-3 gap-8 m-5 max-w-5xl m-auto">
          
          <div class="bg-white">
            <img src="https://via.placeholder.com/150" alt="" class="w-full h-48 sm:h-56 object-cover" />
  
            <div class="px-10 py-6 mb-10 text-center">
              <div class="text-2xl font-bold text-purple-500 mb-4">{{$book->title}}</div>
              <span class="text-sm">
                {{ $book->description }}
              </span>
            </div>
  
            <button class="w-full text-lg h-16 text-white font-extrabold bg-purple-500"><a href="{{ route('book.create')}}">Ajouter</a></button>
          </div>

  
        </div>
        @endforeach
      </main>
      
    </div>