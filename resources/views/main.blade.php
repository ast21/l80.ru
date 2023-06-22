<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto">
  <div class="pt-6 pb-6 flex justify-between items-center">
    <div class="flex items-center">
      <img src="/logo.svg" alt="logo"/>
      <span class="ml-3 mr-4 text-2xl font-semibold">Landwind</span>
      <ul class="flex">
        <li class="pl-4 pr-4 hover:text-purple-700 hover:underline cursor-pointer">Company</li>
        <li class="pl-4 pr-4 hover:text-purple-700 hover:underline cursor-pointer">Marketplace</li>
        <li class="pl-4 pr-4 hover:text-purple-700 hover:underline cursor-pointer">Features</li>
        <li class="pl-4 pr-4 hover:text-purple-700 hover:underline cursor-pointer">Team</li>
        <li class="pl-4 pr-4 hover:text-purple-700 hover:underline cursor-pointer">Contact</li>
      </ul>
    </div>

    <div class="flex">
      <button class="bg-white hover:text-purple-700 hover:underline py-2 px-4 rounded-lg">
        Log in
      </button>
      <button class="bg-purple-700 hover:bg-purple-800 text-white py-2 px-4 rounded-lg">
        Get started
      </button>
    </div>
  </div>
</div>

</body>
@vite('resources/js/app.js')
</html>
