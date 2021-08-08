<nav aria-label="Page navigation">
    <ul class="pagination">
        @if($res->currentPage() !== 1 && $res->lastPage() !== 1)
            <li class="page-item">
                <a class="page-link" href="{{ $res->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        @endif
        @php
            $count = 1;
        @endphp
        @while ($count <= $res->lastPage())
            @if ($res->currentPage() === $count)
                <li class="page-item active">
                    <a class="page-link" href="#">{{ $count }}</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $res->url($count) }}">{{ $count }}</a>
                </li>
            @endif
            @php
                $count++;
            @endphp
        @endwhile
        @if($res->currentPage() !== $res->lastPage() && $res->lastPage() !== 1)
            <li class="page-item">
                <a class="page-link" href="{{ $res->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        @endif
    </ul>
</nav>
