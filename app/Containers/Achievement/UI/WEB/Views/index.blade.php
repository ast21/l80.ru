<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta title="Achievements page">
  @vite('resources/css/app.css')
</head>
<body class="bg-current text-current accent-amber-50">

<section class="mb-28 text-center">
  <h3 class="my-10 text-3xl font-semibold text-gray-700 dark:text-white">
    Achievements
  </h3>

  <div class="flex flex-wrap flex-row justify-center">
    @foreach($achievements as $achievement)
      <div class="block rounded-xl bg-neutral-700 w-80 m-3">
        <img src="{{ $achievement->icon_url }}" alt="{{ $achievement->title }}"
             class="w-20 h-20 mx-auto mt-16 rounded-xl">
        <h4 class="mx-7 mt-10 text-amber-800 text-2xl font-extrabold text-current">{{ $achievement->title }}</h4>
        <p class="mx-7 mt-5 pb-16">{{ $achievement->target }}</p>
      </div>
    @endforeach
  </div>
</section>


</body>
@vite('resources/js/app.js')
</html>
