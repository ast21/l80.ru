<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto">
  <div class="py-6 flex justify-between items-center">
    <div class="flex items-center">
      <img src="/logo.svg" alt="logo"/>
      <span class="ml-3 mr-4 text-2xl font-semibold">Landwind</span>
      <ul class="flex">
        <li class="px-4 hover:text-purple-700 hover:underline cursor-pointer">Company</li>
        <li class="px-4 hover:text-purple-700 hover:underline cursor-pointer">Marketplace</li>
        <li class="px-4 hover:text-purple-700 hover:underline cursor-pointer">Features</li>
        <li class="px-4 hover:text-purple-700 hover:underline cursor-pointer">Team</li>
        {{--        <li class="px-4 hover:text-purple-700 hover:underline cursor-pointer">Contact</li>--}}
      </ul>
    </div>

    <div class="flex">
      <button class="bg-white hover:text-purple-700 hover:underline py-2 px-3 rounded-lg">
        Log in
      </button>
      <button class="bg-purple-700 hover:bg-purple-800 text-white py-2 px-3 rounded-lg">
        Get started
      </button>
    </div>
  </div>

  <div class="py-16 flex items-center">
    <div class="w-auto">
      <h1 class="text-6xl font-black">
        Building digital products & brands.
      </h1>
      <p class="mt-6 text-xl text-gray-500">
        Here at flowbite we focus on markets where technology, innovation,
        and capital can unlock long-term value and drive economic growth.
      </p>
      <div class="flex mt-10">
        <button class="bg-purple-700 hover:bg-purple-800 text-white py-3 px-4 rounded-lg block">
          Start 30 day free trial
        </button>
        <button
          class="ml-4 bg-white hover:bg-gray-50 hover:text-purple-800 py-3 px-4 rounded-lg border border-gray-200 block">
          Pricing & FAQ
        </button>
      </div>

    </div>
    <img src="/images/marketing-strategy-1.png" alt="marketing-strategy" class="ml-3"/>
  </div>

  <div class="flex justify-between">
    <img src="/images/google.svg" alt="google"/>
    <img src="/images/microsoft.svg" alt="microsoft"/>
    <img src="/images/spotify.svg" alt="spotify"/>
    <img src="/images/mailchimp.svg" alt="mailchimp"/>
    <img src="/images/airbnb.svg" alt="airbnb"/>
    <img src="/images/uber.svg" alt="uber"/>

  </div>
</div>

</body>
@vite('resources/js/app.js')
</html>
