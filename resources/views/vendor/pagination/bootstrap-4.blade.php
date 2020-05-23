@if ($paginator->hasPages())
    <nav class="navigation pagination">
        <div class="nav-links">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
            @else
                <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
               {{-- @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif--}}

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span aria-current="page" class="page-numbers current">{{$page}}</span>
                        @else
                            <a class="page-numbers" href="{{$url}}">{{$page}}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
            @else
                <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
            @endif
        </div>
    </nav>
@endif
