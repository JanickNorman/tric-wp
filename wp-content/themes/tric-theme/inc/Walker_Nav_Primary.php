

<?php


class Walker_Nav_Primary extends Walker_Nav_menu {

    private $num_of_ancestor = 0;

    public $tree_type = ['page', 'taxonomy'];
    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id'
    );


    public function start_lvl( &$output, $depth = 0, $args = array() ) {
      // <ul class="nav__panel-child">
        if ($depth == 0) {
          $output .= "<ul class='nav__panel-child'>";
        }else if ($depth == 1) {
          //<ul class="nav__panel-child-2">
            $output .= "<ul class='nav__panel-child-2'>";
        }else if ($depth == 2) {
              $output .= "<ul class='nav__panel-child-2'>";
        }

    }

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     *
     * Note: Menu objects include url and title properties, so we will use those.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0) {
        // $output .= sprintf( "\n<li><a href='%s'%s>%s</a></li>\n",
        //     $item->url,
        //     ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
        //     $item->title
        //      <li class="nav__item"><a href="/page--with-nav.html" class="nav__item-links">Tentang TRiC</a>
        //  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Sejarah</a></li>
        //<li class="nav__item nav__item--active"><a href="/posts.html" class="nav__item-links">Artikel</a></li>
          $parent_class = ($this->get_top_level_parent($args->current_page->queried_object_id, $depth) == $item->object_id) ? "nav__item--active" : "";
          if ($depth == 0) {

            //<li class="nav__item"><a href="/page--with-nav.html" class="nav__item-links">Tentang TRiC</a>
          //  $output .= "<li class='nav__item ".$parent_class."'><a href='".$item->url."' class='nav__item-links'>".$item->title."</a>";
            $output .= sprintf("<li class='nav__item %s'><a href='%s' class='nav__item-links'>%s </a>",
                  $parent_class,
                  $item->url,
                  $item->title);

          }else if ($depth == 1) {
              // <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Sejarah</a></li>
              $output .= sprintf('<li class="nav__item-child"><a href="%s" class="nav__item-child-links">%s</a>',
                  $item->url,
                  $item->title
                  );

          }else if ($depth == 2) {
            //<li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Regional Board</a></li>
            $output .= sprintf('<li class="nav__item-child-2"><a href="%s" class="nav__item-child-links-2">%s</a>',
                        $item->url,
                        $item->title
                  );
          }


      }

      /**
       *  @string
       */
      private function get_top_level_parent($page, $depth) {
            if ($depth == 0) {
                  return $page;
            }

            return array_pop((array_slice(get_post_ancestors($page), -1)));
      }

}