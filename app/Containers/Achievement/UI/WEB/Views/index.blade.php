<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta title="Achievements page">
  {{ Vite::useBuildDirectory('build/achievement')->withEntryPoints(['resources/css/app.css']) }}
</head>
<body class="bg-[#030a26] text-[#d0d9fb]">

<section class="mb-28 text-center">
  <h1 class="my-10 text-4xl font-semibold">
    {{ __('Achievements') }}
  </h1>

  <div class="flex flex-wrap flex-row justify-center">
    @foreach($achievements as $achievement)
      <div
        class="block rounded-xl w-80 m-3 border border-solid border-[rgba(255,255,255,0.10)] bg-[rgba(255,255,255,0.03)]">
        <img src="{{ $achievement->icon_url }}" alt="{{ $achievement->title }}"
             class="w-20 h-20 mx-auto mt-16 rounded-xl border border-solid border-[rgba(255,255,255,0.10)]">
        <h4 class="mx-7 mt-10 text-2xl font-extrabold text-current">{{ $achievement->title }}</h4>
        <p class="mx-7 mt-5 pb-16 text-current">{{ $achievement->target }}</p>
      </div>
    @endforeach
  </div>
</section>


</body>
{{ Vite::useBuildDirectory('build/achievement')->withEntryPoints(['resources/js/app.js']) }}
</html>
