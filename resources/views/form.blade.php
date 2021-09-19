<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body style="background: #213a03;" >

    <div class=" flex justify-center mt-4 ">
    <div class="w-full max-w-xs text-center ">
        
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 " method="POST" action="{{route('book.store')}}" enctype="multipart/form-data">
        @csrf
        @if (count($errors) > 0)
        <div class=" bg-red-100 border-red-2 text-red-700 text-left rounded box-shadow">
            <ol >
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
      @endif
        @if ($message = Session::get('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">{{$message}}</strong>
          
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          </span>
        </div>
      @endif
      @if ($message = Session::get('echec'))
     
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">{{$message}}</strong>
        
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          
        </span>
      </div>
      @endif
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="titre" >
            Titre
          </label>
          <input name="titre" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titre"  placeholder="titre">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="auteur">
              Auteur
            </label>
            <input name="auteur" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="auteur"  placeholder="auteur">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="date">
              Date de publication
            </label>
            <input name="date" type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" placeholder="date">
          </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
            Description
          </label>
          <input name="description" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" placeholder="description">
          
        </div>
        <div class="mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" for="image">
              Choisir une image
            </label>
            <input name="image" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" >
          </div>
        <div class="flex items-center justify-between">
            
          <button type="submit" value="Ajouter" name="Ajouter" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
         Ajouter </button>
        </div>
      </form>
      <p class="text-center text-gray-500 text-xs">
        &copy;2020 Acme Corp. All rights reserved.
      </p>
    </div>
</div>
</body>
</html>