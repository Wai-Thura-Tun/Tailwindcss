<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <section class="bg-gray-300">
    <div class="container mx-auto p-2">
      Lorem ipsum...
    </div>
  </section>
  <section class="bg-white border-b-2 border-b-yellow-500">
    <nav class="container mx-auto flex flex-row justify-between items-center py-5">
      <h1>
        <a href="">
          <img src="{{ asset('jpg/logo.png') }}" alt="">
        </a>
      </h1>
      <div class="flex space-x-5 items-center">
        <a class="rounded-md py-2 px-6 hover:bg-yellow-500 hover:text-white" href="">Home</a>
        <a class="rounded-md py-2 px-6 hover:bg-yellow-500 hover:text-white" href="">About</a>
        <a class="rounded-md py-2 px-6 hover:bg-yellow-500 hover:text-white" href="">Blog</a>
        <a class="rounded-md py-2 px-6 hover:bg-yellow-500 hover:text-white" href="">News</a>
        <a class="rounded-md py-2 px-6 hover:bg-yellow-500 hover:text-white" href="">Contact Us</a>
      </div>
    </nav>
  </section>
  <section>
    <div class="flex max-w-3xl mx-auto flex-col items-center mt-10">
      <h2 class="font-bold block text-center text-orange-400 text-4xl">About Us</h2>
      <h3 class="mt-3 text-center text-gray-400 text-3xl">Porem ipsum dolor sit amet, consectetur dipisicing elit</h3>
      <p class="mt-5 leading-7 text-center">Porem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempoi cidi ut labore et dolore magna aliqua.Porem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempoi cidi ut labore et dolore magna aliqua.</p>
      <p class="mt-5 leading-7 text-center">Porem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempoi cidi ut labore et dolore magna aliqua.Porem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempoi cidi ut labore et dolore magna aliqua.</p>
    </div>
    <div class=" max-w-4xl">
      <img src="{{ asset('') }}" alt="">
    </div>
  </section>
</body>
</html>