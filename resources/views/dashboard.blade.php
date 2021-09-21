<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('Dashboard') }}
        </h2> 
    </x-slot>


    <div class=" top-10 left-0">
        <button class="w-full text-lg h-16 text-white font-extrabold bg-green-500"><a class=" w-full hover:text-red" href="{{route('book.create')}}">Ajouter</a></button>
      </div>
          <!-- This is an example component -->
      <div class=" mt-10 mb-50">
      <main class="">
            <div class="text-4xl sm:text-5xl text-center my-10">What type of food do you like?</div>
     
            <div class="grid md:grid-cols-3 gap-8 m-5 max-w-5xl m-auto">
                @foreach ($books as $book)
              
              <div class=" relative grid-rows-3 bg-white">
                <img src="{{ substr(Storage::url($book->image->path),1) }}" style="width:300px;
                height:300x;" alt="image" class="w-full sm:h-56 object-cover" />
      
                <div class="px-10 py-6 text-center">
                  <div class=" overflow-auto text-2xl font-bold text-purple-500 mb-4">{{$book->title}}</div>
                  <div class=" overflow-auto border border-2 h-30 mb-4">
                  <span class="text-sm">
                    {{ $book->description }}
                  </span>
                </div>
                </div>
                <button class=" absolute bottom-0  w-full text-lg  text-white font-extrabold bg-purple-500 ">
                    <a href="{{ route('book.create')}}" class=" w-full">Ajouter</a>
                </button>
                
              </div>
              @endforeach
            </div>
            </div>
          
          </main>
          
        </div>
    
</x-app-layout>
