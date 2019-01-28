@if ($paginator->hasPages())
<ul class="pagination justify-content-center" role="navigation">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span class="page-link" aria-hidden="true">First</span>
    </li>
    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
        <span class="page-link" aria-hidden="true">&lsaquo;</span>
    </li>
    @else
    <li class="page-item">
        <a class="page-link" href="{{ $paginator->url(1) }}" rel="prev" aria-label="@lang('pagination.previous')">First</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
    </li>
    @endif


    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
    @endif
    
    {{-- Array Of Links --}}
    @if (is_array($element))

    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
    @else
        @if ($page < $paginator->currentPage() - 2)
            @if (!isset($leftDot))
            <?php echo (isset($leftDot)) ?>
            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            <?php $leftDot = true ?>
            @endif
        @elseif ($page > $paginator->currentPage() + 2 && $page < $paginator->lastPage() - 1)
            @if (!isset($rightDot))
            <?php echo (isset($leftDot)); ?>
            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            <?php $rightDot = true ?>
            @endif
        @else
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li class="page-item">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
    </li>
    <li class="page-item">
            <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}" rel="next" aria-label="@lang('pagination.next')">Last</a>
    </li>
    @else
    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
        <span class="page-link" aria-hidden="true">&rsaquo;</span>
    </li>
    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span class="page-link" aria-hidden="true">Last</span>
    </li>
    @endif
</ul>
@endif