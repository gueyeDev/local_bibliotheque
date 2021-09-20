<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div class=" grid grid-rows-3 bg-red-300 border-2 w-full h-screen">
        <div class=" border-2 bg-green-100 mt-3 text-center">div1</div>
        <div class="border-2 bg-yellow-100 mt-3 text-center">div2</div>
        <div class=" border-2 bg-red-100 mt-3 text-center">div3</div>
    </div>
    <div class=" hidden grid grid-rows-3 bg-gray-300 border-2 w-full h-screen">
        <div class=" border-2 bg-green-100 mt-3 text-center">div1</div>
        <div class="border-2 bg-yellow-100 mt-3 text-center">div2</div>
        <div class=" border-2 bg-red-100 mt-3 text-center">div3</div>
    </div>
</body>
</html>