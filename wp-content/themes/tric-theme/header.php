<?php global $wp_query; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport"><meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <?php wp_head(); ?>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="./vendors/flexslider/flexslider.css"></script>
    <link rel="stylesheet" href="./vendors/Swiper/dist/css/swiper.min.css">
  </head>
  <body>
    <header id="header">
      <div class="nav">
        <div class="nav__sec-nav">
          <div class="nav__wrapper"><span class="nav__slogan">&ldquo; Ride With Pride, TRiC Is My Pride &rdquo;</span>
            <div class="nav__searchbar">.nav__searchbar
              <div class="nav-search"></div>
                  <?php get_search_form() ?>
<!--               <form action="/search?q=" method="GET" class="nav__search">
                <input type="text" name="q" placeholder="search here" class="nav__search-input">
                <button type="submit" title="search" class="nav__search-submit">
                  <svg style="margin-top: 10%;margin-left:20%" class="nav__search-icon">
                    <path fill="#ddd" d="M15.504 13.616l-3.79-3.223c-0.392-0.353-0.811-0.514-1.149-0.499 0.895-1.048 1.435-2.407 1.435-3.893 0-3.314-2.686-6-6-6s-6 2.686-6 6 2.686 6 6 6c1.486 0 2.845-0.54 3.893-1.435-0.016 0.338 0.146 0.757 0.499 1.149l3.223 3.79c0.552 0.613 1.453 0.665 2.003 0.115s0.498-1.452-0.115-2.003zM6 10c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z"></path>
                  </svg>
                </button>
              </form> -->
            </div>
          </div>
        </div>
        <div class="nav__main-nav">
          <div class="nav__wrapper">
            <div class="nav__logo"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/tric_logo.png" alt=""></a></div>
            <ul id="nav__panel" class="nav__panel">
                  <?php
                wp_nav_menu([
                    'menu_class' => '',
                    'menu_id' => '',
                    'container' => 'ul',
                    'container_class' => '',
                    'before' => '',
                    'after' => '',
                    'depth' => 3,
                    'items_wrap' => '%3$s',
                    'walker' => new Walker_nav_Primary(),
                    'current_page' => $wp_query,
                  ]);

               ?>
            </ul>
            </div>
        </div>



<!--         <div class="nav__main-nav">
          <div class="nav__wrapper">
            <div class="nav__logo"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/tric_logo.png" alt=""></a></div>
            <ul id="nav__panel" class="nav__panel">
              <li class="nav__item"><a href="/page--with-nav.html" class="nav__item-links">Tentang TRiC</a>
                <ul class="nav__panel-child">
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Sejarah</a></li>
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Visi dan Misi</a></li>
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Slogan</a></li>
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Struktur Organisasi</a>
                    <ul class="nav__panel-child-2">
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Regional Board</a></li>
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Mother chapther</a></li>
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Chapter</a></li>
                    </ul>
                  </li>
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Partnering Organizations</a>
                    <ul class="nav__panel-child-2">
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Honda Tiger Club Indonesia</a></li>
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Alliansi 19</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav__item"><a href="/" class="nav__item-links">Program Kegiatan</a>
                <ul class="nav__panel-child">
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Program</a>
                    <ul class="nav__panel-child-2">
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Musyawarah Anggota</a></li>
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Pendidikan Prospect</a></li>
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Aksi Sollidaritas</a></li>
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Anniversary TRiC</a></li>
                    </ul>
                  </li>
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Bisnis TRiC</a>
                    <ul class="nav__panel-child-2">
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Safety Riding Course</a></li>
                      <li class="nav__item-child-2"><a href="#" class="nav__item-child-links-2">Jasa Pengawalan</a></li>
                    </ul>
                  </li>
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Program Plan 2016-2018</a></li>
                </ul>
              </li>
              <li class="nav__item"><a href="/events.html" class="nav__item-links">Events</a></li>
              <li class="nav__item nav__item--active"><a href="/posts.html" class="nav__item-links">Artikel</a></li>
              <li class="nav__item"><a href="/marchandise.html" class="nav__item-links">Marchandise</a></li>
              <li class="nav__item"><a href="/media.html" class="nav__item-links">Media</a>
                <ul class="nav__panel-child">
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Video</a></li>
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Gallery</a></li>
                  <li class="nav__item-child"><a href="/page--with-nav.html" class="nav__item-child-links">Lambang Resmi TRiC</a></li>
                </ul>
              </li>
              <li class="nav__item"><a href="/page.html" class="nav__item-links">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div> -->
      <div id="nav-mob" class="nav-mob">
        <div class="nav-mob__main-wrapper">
          <div class="nav-mob__main-nav">
            <div class="nav-mob__logo"><a href="/"><img src="assets/img/tric_logo.png" width="60px" alt=""></a></div>
            <div class="nav-mob__wrapper">
              <div class="nav-mob__search"><svg height="24px" version="1.1" viewBox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="miu" stroke="none" stroke-width="1"><g id="Artboard-1" transform="translate(-539.000000, -407.000000)"><g id="slice" transform="translate(215.000000, 119.000000)"/><path d="M555.477276,421.355956 C556.43712,419.979383 557,418.305425 557,416.5 C557,411.805579 553.194421,408 548.5,408 C543.805579,408 540,411.805579 540,416.5 C540,421.194421 543.805579,425 548.5,425 C550.305148,425 551.978868,424.437293 553.355321,423.477719 L553.355892,423.477212 L559.659433,429.780753 C559.776309,429.897629 559.962206,429.901225 560.082211,429.78122 L561.78122,428.082211 C561.897838,427.965593 561.892417,427.771097 561.780753,427.659433 L555.477276,421.355956 Z M548.5,423 C552.089851,423 555,420.089851 555,416.5 C555,412.910149 552.089851,410 548.5,410 C544.910149,410 542,412.910149 542,416.5 C542,420.089851 544.910149,423 548.5,423 Z" fill="#000000" id="common-search-lookup-glyph"/></g></g></svg></div>
              <div class="nav-mob__burgermenu">
                <div class="nav-mob__icon"></div>
              </div>
            </div>
          </div>
          <div class="nav-mob__searchbar">
            <form role="search" class="search-bar">
              <input type="search" placeholder="Enter Search">
              <button type="submit"><img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/search-icon-black.png" alt="Search Icon"></button>
            </form>
          </div>
          <div class="nav-mob__menu">
            <ul class="nav-mob__items">
              <li class="nav-mob__item">Tentang Tric</li>
              <li class="nav-mob__item">Events</li>
              <li class="nav-mob__item">News</li>
              <li class="nav-mob__item">Jasa</li>
              <li class="nav-mob__item">Marchandise</li>
              <li class="nav-mob__item">Media</li>
              <li class="nav-mob__item">Kontak</li>
            </ul>
          </div>
        </div>
      </div>
    </header>

