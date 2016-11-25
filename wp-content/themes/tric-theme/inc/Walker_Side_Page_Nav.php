

<?php


class Walker_Side_Page_Nav extends Walker_Nav_menu {

    public $tree_type = ['page'];
    // Tell Walker where to inherit it's parent and id values
        var $db_fields = array(
        'parent' => 'post_parent',
        'id'     => 'ID'
    );


    public function start_lvl( &$output, $depth = 0, $args = array() ) {

    }

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     *
     * Note: Menu objects include url and title properties, so we will use those.
     */

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0) {
        //   <ul data-accordion-group class="page-nav__navigation">
        //   <li class="page-nav__nav-item">
        //     <div class="page-nav__nav-link-wrapper"><a href="#" class="page-nav__nav-link">Sejarah</a></div>
        //   </li>
        //   <li class="page-nav__nav-item">
        //     <div class="page-nav__nav-link-wrapper"><a href="#" class="page-nav__nav-link">Visi dan Misi</a></div>
        //   </li>
        //   <li class="page-nav__nav-item">
        //     <div class="page-nav__nav-link-wrapper"><a href="#" class="page-nav__nav-link">Slogan</a></div>
        //   </li>
        //   <li data-accordion class="page-nav__nav-item page-nav__nav-item--has-child open">
        //     <div class="page-nav__nav-link-wrapper"><a href="#" class="page-nav__nav-link">Struktur Organisasi</a></div>
        //     <ul data-content class="page-nav__nav-lvl2">
        //       <li class="page-nav__nav-item-lvl2"><a href="#" class="page-nav__nav-link-lvl2">Regional Board</a></li>
        //       <li class="page-nav__nav-item-lvl2 page-nav--active"><a href="#" class="page-nav__nav-link-lvl2">Mother Chapter</a></li>
        //       <li class="page-nav__nav-item-lvl2"><a href="#" class="page-nav__nav-link-lvl2">Chapter</a></li>
        //     </ul><span data-control class="page-nav__nav-expander"><span class="page-nav__nav-expander-icon">-</span></span>
        //   </li>
        //   <li data-accordion class="page-nav__nav-item page-nav__nav-item--has-child">
        //     <div class="page-nav__nav-link-wrapper"><a href="" class="page-nav__nav-link">Partnering Organizations</a></div>
        //     <ul data-content class="page-nav__nav-lvl2">
        //       <li class="page-nav__nav-item-lvl2"><a href="#" class="page-nav__nav-link-lvl2">HTCI</a><span class="page-nav__nav-icon"></span></li>
        //       <li class="page-nav__nav-item-lvl2"><a href="#" class="page-nav__nav-link-lvl2">Alliansi 19</a><span class="page-nav__nav-icon"></span></li>
        //     </ul><span data-control class="page-nav__nav-expander"><span class="page-nav__nav-expander-icon">+</span></span>
        //   </li>
        // </ul>
        if ($depth == 0) {
                $output .= sprintf('<li class="page-nav__nav-item"><div class="page-nav__nav-link-wrapper"><a href="%s" class="page-nav__nav-link">%s</a></div></li>',
                                                        get_page_link($item->ID),
                                                        $item->post_title);
          }

      }


}