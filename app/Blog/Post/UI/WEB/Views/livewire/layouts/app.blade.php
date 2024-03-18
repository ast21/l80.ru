<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8"/>
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
  <meta property="og:title" content="Blog"/>
  <meta property="og:locale" content="ru_RU"/>
  <meta
    property="og:url"
    content="https://blog.l80.ru"
  />
  <meta
    name="description"
    content="Личный блог. Статьи, новости и многое другое."
  />
  {{--  <meta property="og:site_name" content="Atlas Template"/>--}}
  {{--  <meta property="og:image" content="https://atlas.tailwindmade.com/assets/img/social.jpg"/>--}}
  {{--  <meta name="twitter:card" content="summary_large_image"/>--}}
  {{--  <meta name="twitter:site" content="@tailwindmade"/>--}}
  <link
    crossorigin="crossorigin"
    href="https://fonts.gstatic.com"
    rel="preconnect"
  />
  <link
    as="style"
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="preload"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
  />
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/atom-one-dark.min.css"
  />
  <script>
    hljs.initHighlightingOnLoad();
  </script>

  <title>{{ $title ?? 'Blog posts' }}</title>
  @livewireStyles
  {{ Vite::useBuildDirectory('build/blog')->withEntryPoints(['resources/css/app.css']) }}
</head>
<body
  x-data="global()"
  x-init="themeInit()"
  :class="isMobileMenuOpen ? 'max-h-screen overflow-hidden relative' : ''"
  class="dark:bg-primary"
>

<div id="main">
  <div class="container mx-auto">
    <div class="flex items-center justify-between py-6 lg:py-10">
      <a href="/" class="flex items-center">
      <span href="/" class="mr-2">
        <img src="/assets/img/logo.svg" alt="logo"/>
      </span>
        <p class="hidden font-body text-2xl font-bold text-primary dark:text-white lg:block">
          Anastas Mironov
        </p>
      </a>
      <div class="flex items-center lg:hidden">
        <i
          class="bx mr-8 cursor-pointer text-3xl text-primary dark:text-white"
          @click="themeSwitch()"
          :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'"
        ></i>

        <svg
          width="24"
          height="15"
          xmlns="http://www.w3.org/2000/svg"
          @click="isMobileMenuOpen = true"
          class="fill-current text-primary dark:text-white"
        >
          <g fill-rule="evenodd">
            <rect width="24" height="3" rx="1.5"/>
            <rect x="8" y="6" width="16" height="3" rx="1.5"/>
            <rect x="4" y="12" width="20" height="3" rx="1.5"/>
          </g>
        </svg>
      </div>
      <div class="hidden lg:block">
        <ul class="flex items-center">

          <li class="group relative mr-6 mb-1">
            <div class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow"></div>
            <a href="/" class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">Intro</a>
          </li>

          <li class="group relative mr-6 mb-1">
            <div class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow"></div>
            <a href="/blog" class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">Blog</a>
          </li>

          <li class="group relative mr-6 mb-1">
            <div class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow"></div>
            <a href="/uses" class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">Uses</a>
          </li>

          <li class="group relative mr-6 mb-1">
            <div class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow"></div>
            <a href="/contact" class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">Contact</a>
          </li>

          <li><i class="bx cursor-pointer text-3xl text-primary dark:text-white" @click="themeSwitch()" :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'"></i>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div
    class="pointer-events-none fixed inset-0 z-50 flex bg-black bg-opacity-80 opacity-0 transition-opacity lg:hidden"
    :class="isMobileMenuOpen ? 'opacity-100 pointer-events-auto' : ''"
  >
    <div class="ml-auto w-2/3 bg-green p-4 md:w-1/3">
      <i
        class="bx bx-x absolute top-0 right-0 mt-4 mr-4 text-4xl text-white"
        @click="isMobileMenuOpen = false"
      ></i>
      <ul class="mt-8 flex flex-col">

        <li class="">
          <a href="/" class="mb-3 block px-2 font-body text-lg font-medium text-white">Intro</a>
        </li>

        <li class="">
          <a href="/blog" class="mb-3 block px-2 font-body text-lg font-medium text-white">Blog</a>
        </li>

        <li class="">
          <a href="/uses" class="mb-3 block px-2 font-body text-lg font-medium text-white">Uses</a>
        </li>

        <li class="">
          <a href="/contact" class="mb-3 block px-2 font-body text-lg font-medium text-white">Contact</a>
        </li>

      </ul>
    </div>
  </div>

  {{ $slot }}

  <div class="container mx-auto">
    <div class="flex flex-col items-center justify-between border-t border-grey-lighter py-10 sm:flex-row sm:py-12">
      <div class="mr-auto flex flex-col items-center sm:flex-row">
        <a href="/" class="mr-auto sm:mr-6">
          <img src="/assets/img/logo.svg" alt="logo"/>
        </a>
        <p class="pt-5 font-body font-light text-primary dark:text-white sm:pt-0">
          ©{{ now()->format('Y') }} Anastas Mironov.
        </p>
      </div>
      <div class="mr-auto flex items-center pt-5 sm:mr-0 sm:pt-0">

        <a href="https://github.com/ast21" target="_blank">
          <i class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-github"></i>
        </a>

        <a href="https://codepen.io/ast21k" target="_blank">
          <i class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-codepen"></i>
        </a>

        <a href="https://www.linkedin.com/in/ast21" target="_blank">
          <i class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-linkedin"></i>
        </a>

      </div>
    </div>
  </div>

</div>

@livewireScripts
{{ Vite::useBuildDirectory('build/blog')->withEntryPoints(['resources/js/app.js']) }}
</body>
</html>
