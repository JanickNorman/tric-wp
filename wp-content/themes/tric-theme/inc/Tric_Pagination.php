<?php

function tric_pagination( $args ) {

    $totalPage = $args['totalPage'];
    $currentPage = $args['currentPage'];

    $prevPagesTotal = $currentPage - 2;
    $nextPagesTotal = $currentPage + 2;
    $startPage = max(1, $prevPagesTotal);
    $endPage = min($nextPagesTotal, $totalPage);

    if ($prevPagesTotal < 1) {
        $startPage = 1;
        $endPage -= $prevPagesTotal - 1;
        $endPage = ($endPage > $totalPage) ? $totalPage : $endPage;
    }

    if ($nextPagesTotal > $totalPage) {
        $endPage = $totalPage;
        $startPage -= $nextPagesTotal - $totalPage;
        $startPage = ($startPage < 1) ? 1 : $startPage;
    }

    if ($currentPage > $totalPage) {
        $currentPage = $totalPage;
    }



             $prevButton = "";
             $item ="";
             $nextButton = "";

            if ($currentPage !== 1) {
                $prevButton .= "<a href='".add_query_arg('paged', 1)."' class='pagination__nav pagination__nav--first'>";
                $prevButton .= '<span class="pagination__first-nav">First</span></a>';
                $prevButton .= '<a href="'.add_query_arg('paged', $currentPage - 1).'" class="pagination__nav pagination__nav--previous"><</a>';
            }

            for ($i=$startPage; $i <= $endPage; $i++) {
                if ($i == $currentPage) {
                    $item .= '<span class="pagination__nav pagination__nav--current">'.$i.'</span>';
                } else {
                    $item .= '<a href="'.add_query_arg('paged', $i).'" class="pagination__nav">'.$i.'</a>';
                }
            }

            if ($currentPage < $totalPage) {

                    $nextButton .= '<a href="'.add_query_arg('paged', $currentPage + 1).'" class="pagination__nav pagination__nav--next">></a>';
                    $nextButton .= '<a href="'.add_query_arg('paged',  $totalPage).'" class="pagination__nav pagination__nav--last">';
                    $nextButton .= '<span class="pagination__first-nav">Last</span></a>';
            }
        $output = $prevButton . $item . $nextButton;




        if ($totalPage > 0) {
            return $output;
        }

        return "";

    }








 ?>