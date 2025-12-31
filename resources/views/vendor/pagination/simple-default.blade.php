@if ($paginator->hasPages())
    <style>
        .pagination {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .pagination li { display: inline-flex; }
        .pagination a,
        .pagination span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 36px;
            padding: 0.5rem 0.85rem;
            border-radius: 10px;
            border: 1px solid rgba(93, 212, 255, 0.2);
            background: rgba(255, 255, 255, 0.03);
            color: var(--text, #e8ecf7);
            font-weight: 600;
            line-height: 1;
            text-decoration: none;
            transition: border-color 140ms ease, background 140ms ease, color 140ms ease;
        }
        .pagination a:hover {
            border-color: rgba(93, 212, 255, 0.45);
            background: rgba(93, 212, 255, 0.08);
        }
        .pagination .disabled span {
            opacity: 0.45;
            cursor: not-allowed;
        }
    </style>

    <nav aria-label="Pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
