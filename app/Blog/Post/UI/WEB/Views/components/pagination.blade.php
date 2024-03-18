@php
  if (! isset($scrollTo)) {
      $scrollTo = 'body';
  }

  $scrollIntoViewJsSnippet = ($scrollTo !== false)
      ? <<<JS
         (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
      JS
      : '';
@endphp


@if ($paginator->hasPages())
  <div class="flex pt-8 lg:pt-16">
    <span class="group flex items-center cursor-pointer border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary">
      <i class="bx bx-chevrons-left text-primary transition-colors group-hover:text-secondary dark:text-white"></i>
    </span>
    <span class="ml-3 cursor-default px-3 py-1 font-body font-medium text-primary dark:text-white">...</span>

    <span class="ml-3 cursor-pointer border-2 border-secondary px-3 py-1 font-body font-medium text-secondary">1</span>
    <span class="ml-3 cursor-pointer border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary">2</span>
    <span class="ml-3 cursor-pointer border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary">3</span>

    <span class="ml-3 cursor-default px-3 py-1 font-body font-medium text-primary dark:text-white">...</span>
    <span class="group flex items-center ml-3 cursor-pointer border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary">
      <i class="bx bx-chevrons-right text-primary transition-colors group-hover:text-secondary dark:text-white"></i>
    </span>
  </div>

  <div class="flex pt-8 lg:pt-16">
    @if ($paginator->onFirstPage())
      <span class="group flex items-center border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors dark:border-green-light dark:text-white">
          <i class="bx bx-chevron-left text-primary transition-colors dark:text-white"></i>
        </span>
    @else
      <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev">
          <span class="group flex items-center cursor-pointer border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary">
            <i class="bx bx-chevron-left text-primary transition-colors group-hover:text-secondary dark:text-white"></i>
          </span>
      </button>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
      {{-- "Three Dots" Separator --}}
      @if (is_string($element))
        <span class="ml-3 cursor-default px-3 py-1 font-body font-medium text-primary dark:text-white">{{ $element }}</span>
      @endif

      {{-- Array Of Links --}}
      @if (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
            <span class="ml-3 cursor-pointer border-2 border-secondary px-3 py-1 font-body font-medium text-secondary">{{ $page }}</span>
          @else
            <button type="button" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
              <span class="ml-3 cursor-pointer border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary">{{ $page }}</span>
            </button>
          @endif
        @endforeach
      @endif
    @endforeach

    @if ($paginator->onLastPage())
      <span class="group flex items-center ml-3 border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors dark:border-green-light dark:text-white">
        <i class="bx bx-chevron-right text-primary transition-colors dark:text-white"></i>
      </span>
    @else
      <button wire:click="nextPage" wire:loading.attr="disabled" rel="next">
        <span class="group flex items-center ml-3 cursor-pointer border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary">
          <i class="bx bx-chevron-right text-primary transition-colors group-hover:text-secondary dark:text-white"></i>
        </span>
      </button>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
        </svg>
      </a>
    @else
      <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
              <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-r-md leading-5" aria-hidden="true">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                  </svg>
              </span>
          </span>
    @endif

  </div>
@endif
