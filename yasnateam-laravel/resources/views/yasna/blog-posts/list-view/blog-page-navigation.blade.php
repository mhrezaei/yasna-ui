<div class="row page-navigation">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            @for( $i=1;  $i < 5 ; $i++ )
                <li>
                    <a href="{{ "#page". $i }}">{{ $i }}</a>
                </li>
            @endfor

            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>