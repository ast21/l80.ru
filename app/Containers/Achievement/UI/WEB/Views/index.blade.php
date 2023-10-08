<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta title="Achievements page">
  @vite('resources/css/app.css')
</head>
<body>

@foreach($achievements as $achievement)
  <img src="{{ $achievement->icon_url }}" alt="{{ $achievement->title }}">
  <h4 class="text-2xl font-extrabold">{{ $achievement->title }}</h4>
  <p>{{ $achievement->target }}</p>
@endforeach

</body>
@vite('resources/js/app.js')
</html>
