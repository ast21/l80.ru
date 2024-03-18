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

<header class="justify-center items-center bg-white flex flex-col px-20 py-12 max-md:px-5">
  <h1 class="text-blue-600 text-center text-lg font-semibold leading-6 whitespace-nowrap mt-16 max-md:mt-10"
      aria-role="heading">Our Blogs</h1>
  <h2 class="text-gray-900 text-center text-4xl font-bold leading-10 whitespace-nowrap mt-2" aria-role="heading">Our
    Recent News</h2>
  <p class="text-gray-500 text-center text-base leading-6 max-w-[485px] mt-3 max-md:max-w-full" aria-role="paragraph">
    There are many variations of passages of Lorem Ipsum available<br/>but the majority have suffered alteration in some
    form.</p>
  <div class="w-full max-w-[1170px] mt-16 mb-11 max-md:max-w-full max-md:my-10">
    <form>
      <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
        <div class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0">
          <div class="items-start flex grow flex-col max-md:mt-8">
            <img loading="lazy"
                 srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/6cfba110d1ff5485ac2ff40f8cd1c2e311337da5e111bf30b5fcbd1101a02690?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/6cfba110d1ff5485ac2ff40f8cd1c2e311337da5e111bf30b5fcbd1101a02690?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/6cfba110d1ff5485ac2ff40f8cd1c2e311337da5e111bf30b5fcbd1101a02690?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/6cfba110d1ff5485ac2ff40f8cd1c2e311337da5e111bf30b5fcbd1101a02690?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/6cfba110d1ff5485ac2ff40f8cd1c2e311337da5e111bf30b5fcbd1101a02690?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/6cfba110d1ff5485ac2ff40f8cd1c2e311337da5e111bf30b5fcbd1101a02690?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/6cfba110d1ff5485ac2ff40f8cd1c2e311337da5e111bf30b5fcbd1101a02690?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/6cfba110d1ff5485ac2ff40f8cd1c2e311337da5e111bf30b5fcbd1101a02690?apiKey=e35c0c7976984d2393d3b2c166c1b47b&"
                 class="aspect-[1.68] object-contain object-center w-full overflow-hidden self-stretch" alt="Image 1"/>
            <div
              class="text-white text-xs font-medium leading-5 whitespace-nowrap justify-center items-stretch bg-blue-600 mt-8 px-4 py-1 rounded-md self-start"
              aria-role="status">Dec 22, 2023
            </div>
            <h3 class="text-gray-900 text-2xl font-semibold leading-8 self-stretch mt-6" aria-role="heading">Meet
              AutoManage, the best AI management tools</h3>
            <p class="text-gray-500 text-base leading-6 self-stretch mt-4" aria-role="paragraph">Lorem Ipsum is simply
              dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
        <div class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0">
          <div class="items-start flex grow flex-col max-md:mt-8">
            <img loading="lazy"
                 srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/e5b818a6443c2b4d098eba3a063294ae44b43f82a1bff7a116455230342b4e90?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5b818a6443c2b4d098eba3a063294ae44b43f82a1bff7a116455230342b4e90?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5b818a6443c2b4d098eba3a063294ae44b43f82a1bff7a116455230342b4e90?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5b818a6443c2b4d098eba3a063294ae44b43f82a1bff7a116455230342b4e90?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5b818a6443c2b4d098eba3a063294ae44b43f82a1bff7a116455230342b4e90?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5b818a6443c2b4d098eba3a063294ae44b43f82a1bff7a116455230342b4e90?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5b818a6443c2b4d098eba3a063294ae44b43f82a1bff7a116455230342b4e90?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5b818a6443c2b4d098eba3a063294ae44b43f82a1bff7a116455230342b4e90?apiKey=e35c0c7976984d2393d3b2c166c1b47b&"
                 class="aspect-[1.68] object-contain object-center w-full overflow-hidden self-stretch" alt="Image 2"/>
            <div
              class="text-white text-xs font-medium leading-5 whitespace-nowrap justify-center items-stretch bg-blue-600 mt-8 px-4 py-1 rounded-md self-start"
              aria-role="status">Mar 15, 2023
            </div>
            <h3 class="text-gray-900 text-2xl font-semibold leading-8 self-stretch mt-6" aria-role="heading">How to earn
              more money as a wellness coach</h3>
            <p class="text-gray-500 text-base leading-6 self-stretch mt-4" aria-role="paragraph">Lorem Ipsum is simply
              dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
        <div class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0">
          <div class="items-start flex grow flex-col max-md:mt-8">
            <img loading="lazy"
                 srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/e3d368e37b17ab67d47e189867859df829f2c23b7d9a1a52fcf3ee98d5f4e061?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/e3d368e37b17ab67d47e189867859df829f2c23b7d9a1a52fcf3ee98d5f4e061?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e3d368e37b17ab67d47e189867859df829f2c23b7d9a1a52fcf3ee98d5f4e061?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/e3d368e37b17ab67d47e189867859df829f2c23b7d9a1a52fcf3ee98d5f4e061?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/e3d368e37b17ab67d47e189867859df829f2c23b7d9a1a52fcf3ee98d5f4e061?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e3d368e37b17ab67d47e189867859df829f2c23b7d9a1a52fcf3ee98d5f4e061?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/e3d368e37b17ab67d47e189867859df829f2c23b7d9a1a52fcf3ee98d5f4e061?apiKey=e35c0c7976984d2393d3b2c166c1b47b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/e3d368e37b17ab67d47e189867859df829f2c23b7d9a1a52fcf3ee98d5f4e061?apiKey=e35c0c7976984d2393d3b2c166c1b47b&"
                 class="aspect-[1.68] object-contain object-center w-full overflow-hidden self-stretch" alt="Image 3"/>
            <div
              class="text-white text-xs font-medium leading-5 whitespace-nowrap justify-center items-stretch bg-blue-600 mt-8 px-4 py-1 rounded-md self-start"
              aria-role="status">Jan 05, 2023
            </div>
            <h3 class="text-gray-900 text-2xl font-semibold leading-8 self-stretch mt-6" aria-role="heading">The no-fuss
              guide to upselling and cross selling</h3>
            <p class="text-gray-500 text-base leading-6 self-stretch mt-4" aria-role="paragraph">Lorem Ipsum is simply
              dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>
    </form>
  </div>
</header>

</body>
{{ Vite::useBuildDirectory('build/achievement')->withEntryPoints(['resources/js/app.js']) }}
</html>
