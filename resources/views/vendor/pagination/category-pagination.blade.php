@if ($paginator->hasPages())
    <nav>
        <ul class="pagination bsb-pagination-1 pagination-lg justify-content-center">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>
                    </li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                       aria-label="Trang kế tiếp">Trang kế tiếp</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="Trang kế tiếp">
                    <span class="page-link" aria-hidden="true">Trang kế tiếp</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
