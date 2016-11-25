<?php
/*
Template Name: Search Page
*/
?>


<?php
get_header();
// require_once('wp-advanced-search/wpas.php');

// $search = new WP_Advanced_Search('tric-form');


// $search->the_form();
// $search->print_debug();

// $my_search = new WP_Advanced_Search('tric-form');
// $query = $my_search->query();
// if ( $query->have_posts() ):
//     while ( $query->have_posts() ): $query->the_post();
//         the_title();
//     endwhile;
// endif;


$paged = get_query_var('paged') > 0 ? get_query_var('paged') : 1;
$q = $_GET['q'];
$posts_per_page = 3;


$args = [
      's' => $q,
      'posts_per_page' => $posts_per_page,
      'paged' => $paged,
      ];

$query = new WP_Query( $args );

?>

<div class="search-mod__content-wrap">
      <header>
        <h1 class="search-mod__title">Search</h1>
      </header>
      <div class="search-mod__paragraph-title">Showing results from this site for <span class="search-mod__keyword"><?php  echo $q ?></span></div>
      <div class="search-mod__bodytext">About <?php echo $query->found_posts ?> results (0.14 seconds)</div>
      <ul class="search-mod__result-list">
            <?php
                  if ($query->have_posts()) {
                        while ($query->have_posts()) {
                              $query->the_post();
                              echo '<li class="search-mod__result-item">';
                              the_title('<h3 class="search-mod__result-title">', '</h3>');
                              sprintf('<a href="%s" class="search-mod__result-url">%s</a> ', get_permalink(), get_permalink());
                              //printf('<a href="'.get_permalink().'" class="search-mod__result-url">') . the_permalink() . printf('</a>');
                              echo '<p class="search-mod__result-bodytext">.. Working with indigenous peoples in Indonesia. Working with indigenous peoples in Indonesia. ... Related content. Find out more about BP in Indonesia ...</p><a href="#" class="search-mod__result-url">tric.or.id/about-tric/regional-commander</a>';
                              echo '</li>';
                        }
                  }else{
                        echo "NOT FOUND";
                  }
       wp_reset_postdata();
             ?>
<!--         <li class="search-mod__result-item">
          <h3 class="search-mod__result-title">Regional Commander | Struktur Organisasi | About TRIC</h3>
          <p class="search-mod__result-bodytext">BP Global; BP Magazine; Locations; Fighting malaria in Indonesia. Fighting to beat malaria in Indonesia's Bintuni Bay. Last edited: 22 April 2016. ...</p><a href="#" class="search-mod__result-url">tric.or.id/about-tric/struktur-organisasi/regional-commander</a>
        </li>
        <li class="search-mod__result-item">
          <h3 class="search-mod__result-title"><strong>Struktur Organisasi</strong> | About TRIC</h3>
          <p class="search-mod__result-bodytext">.. Working with indigenous peoples in Indonesia. Working with indigenous peoples in Indonesia. ... Related content. Find out more about BP in Indonesia ...</p><a href="#" class="search-mod__result-url">tric.or.id/about-tric/regional-commander</a>
        </li>
        <li class="search-mod__result-item">
          <h3 class="search-mod__result-title">Cara berkendara yang bagus | Blog</h3>
          <p class="search-mod__result-bodytext">... Early planning in offshore Indonesia. Society: Working with communities; Supporting development: ... BP awarded two exploration block in Indonesia. ...</p><a href="#" class="search-mod__result-url">tric.or.id/blog/cara-berkendara-yang...</a>
        </li>
        <li class="search-mod__result-item">
          <h3 class="search-mod__result-title">Apalah title ini namanya | Blog</h3>
          <p class="search-mod__result-bodytext">... Safety at sea. Print archive. BP Global; Press; Press releases; BP awarded exploration block in Indonesia. BP awarded exploration block in Indonesia ...</p><a href="#" class="search-mod__result-url">tric.or.id/blog/apalah-title-ini-namanya</a>
        </li> -->
      </ul>
      <div class="search-mod__pagination">
        <div class="pagination pagination__list">
          <!-- <div class="pagination__wrapper"><a href="#" class="pagination__nav pagination__nav--first"><span class="pagination__first-nav">First</span></a><a href="#" class="pagination__nav pagination__nav--previous"><</a><a href="#" class="pagination__nav">8</a><a href="#" class="pagination__nav">9</a><span class="pagination__nav pagination__nav--current">10</span><a href="#" class="pagination__nav">11</a><a href="#" class="pagination__nav">12</a><a href="#" class="pagination__nav pagination__nav--next">></a><a href="#" class="pagination__nav pagination__nav--last"><span class="pagination__first-nav">Last</span></a></div> -->
          <div class="pagination__wrapper"><?php echo tric_pagination([
              'currentPage' => $paged,
              'totalPage' => $query->max_num_pages
          ]) ?>
          </div>
        </div>
      </div>
    </div>

<?php get_footer() ?>