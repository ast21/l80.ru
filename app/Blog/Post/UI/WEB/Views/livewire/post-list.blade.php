<div>
  <div class="container mx-auto">
    <div class="py-16 lg:py-20">
      <div>
        <img src="/assets/img/icon-blog.png" alt="icon envelope"/>
      </div>

      <h1
        class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
        Posts
      </h1>

      <div class="pt-3 sm:w-3/4">
        <p class="font-body text-xl font-light text-primary dark:text-white">
          Articles, tutorials, snippets, rants, and everything else. Subscribe for
          updates as they happen.
        </p>
      </div>

      {{--      <form class="flex flex-col py-12 sm:flex-row">--}}
      {{--        <input--}}
      {{--          type="email"--}}
      {{--          id="subscribe"--}}
      {{--          placeholder="Drop that email here…"--}}
      {{--          class="w-full border border-primary bg-grey-lightest px-5 py-4 font-body font-light text-primary placeholder-primary transition-colors focus:border-secondary focus:outline-none focus:ring-2 focus:ring-secondary dark:border-secondary sm:w-1/2"--}}
      {{--        />--}}
      {{--        <button--}}
      {{--          type="submit"--}}
      {{--          class="mt-5 bg-secondary px-10 py-4 font-body text-xl font-semibold text-white hover:bg-green sm:mt-0 md:text-2xl"--}}
      {{--       >--}}
      {{--          Subscribe--}}
      {{--        </button>--}}
      {{--      </form>--}}

      {{-- Post list --}}
      <div class="pt-8 lg:pt-12">
        @foreach($posts as $post)
          <div class="border-b border-grey-lighter pt-10 pb-8">
            <div class="flex items-center">
              <span class="mb-4 inline-block rounded-full bg-grey-light px-2 py-1 font-body text-sm text-blue-dark">{{ $post->category->name }}</span>
            </div>
            <a href="{{ route('blog.post.view', ['post' => $post]) }}" class="block font-body text-lg font-semibold text-primary transition-colors hover:text-green dark:text-white dark:hover:text-secondary">
              {{ $post->title }}
            </a>
            <div class="flex items-center pt-4">
              <p class="pr-2 font-body font-light text-primary dark:text-white">{{ $post->published_at->format('d.m.Y H:i') }}</p>
              <span class="font-body text-grey dark:text-white">//</span>
              <p class="pl-2 font-body font-light text-primary dark:text-white">{{ ceil(strlen($post->content) / 100) }} минута чтения</p>
            </div>
          </div>
        @endforeach
      </div>

      {{-- Pagination --}}
      {{ $posts->links('container@Post::components.pagination', data: ['scrollTo' => false]) }}
    </div>
  </div>
</div>
