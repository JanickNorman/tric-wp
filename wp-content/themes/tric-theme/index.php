<?php

get_header();
 ?>
    <section id="slideshow">
      <div id="mod-slideshow" class="mod-slideshow__container">
          <?php wd_slider(1); ?>
        <div class="mod-slideshow__wrapper mod-slideshow__items">

<!--           <div class="mod-slideshow__slide">
            <div class="mod-slideshow__item"><a href=""><img src="assets/img/webbanner.jpg" alt="" class="mod-slideshow__img"></a></div>
          </div>
          <div class="mod-slideshow__slide">
            <div class="mod-slideshow__item"><a href=""><img src="assets/img/marchandise.jpg" alt="" class="mod-slideshow__img"></a></div>
          </div>
          <div class="mod-slideshow__slide">
            <div class="mod-slideshow__item"><a href=""><img src="assets/img/placeholder.jpg" alt="" class="mod-slideshow__img"></a></div>
          </div>  -->
        </div>
        <div class="mod-slideshow__navigation">
          <div class="mod-slideshow__pagination"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="mod-slideshow__button-prev"></div>
        <div class="mod-slideshow__button-next"></div>
      </div>
    </section>
    <section id="main" class="main">
      <div class="mod-latEvents">
        <h1 class="mod-latEvents__head">Events</h1>
        <div class="mod-latEvents__latestBanner"><img src="assets/img/webbanner.jpg" alt="" class="mod-latEvents__banner"></div>
        <ul class="mod-latEvents__event-list">
          <li class="mod-latEvents__event-card">
            <div class="mod-latEvents__date">27 July 2016</div>
            <div class="mod-latEvents__title"><a href="/page.html">Tour de Bojong Kenyot Jilid 2 jontor 3 jam 1 pagi cek bisa lah</a></div>
            <div class="mod-latEvents__location">Bojong Kenyot, Jawa Barat</div>
          </li>
          <li class="mod-latEvents__event-card">
            <div class="mod-latEvents__date">24 July 2016</div>
            <div class="mod-latEvents__title"><a href="/page.html">Tour de Bojong Kenyot Jilid 2</a></div>
            <div class="mod-latEvents__location">Bojong Kenyot, Jawa Barat</div>
          </li>
          <li class="mod-latEvents__event-card">
            <div class="mod-latEvents__date">27 July 2016</div>
            <div class="mod-latEvents__title"><a href="/page.html">Tour de Bojong Kenyot Jilid 2</a></div>
            <div class="mod-latEvents__location">Bojong Kenyot, Jawa Barat</div>
          </li>
        </ul>
        <button class="btn btn--black"><a href="/events.html">View all events</a></button>
      </div>
      <div class="mod-latNews">
        <div class="mod-latNews__card">
          <h1 class="mod-latNews__head">Articles</h1>
          <div class="mod-latNews__latestBanner"><img src="assets/img/webbanner.jpg" alt="" class="mod-latNews__banner"></div>
          <ul class="mod-latNews__newsWrap">
            <li class="mod-latNews__info">
              <div class="mod-latNews__title"><a href="/page.html">Tips agar berkendara lebih aman dan nyaman cek tulisan lebih panjang</a></div>
              <div class="mod-latNews__date">20 July 2016</div>
            </li>
            <li class="mod-latNews__info">
              <div class="mod-latNews__title"><a href="/page.html">Tips agar berkendara lebih aman dan nyaman</a></div>
              <div class="mod-latNews__date">19 July 2016</div>
            </li>
            <li class="mod-latNews__info">
              <div class="mod-latNews__title"><a href="/page.html">Tips agar berkendara lebih aman dan nyaman</a></div>
              <div class="mod-latNews__date">19 July 2016</div>
            </li>
          </ul>
        </div>
        <button class="btn btn--black"><a href="/posts.html">View all news</a></button>
      </div>
    </section>
    <section id="marchandise">
      <div class="mod-marchandise">
        <h1 class="mod-marchandise__head">Marchandise</h1>
        <ul class="mod-marchandise__items">
          <li class="mod-marchandise__item"><img src="assets/img/marchandise.jpg" alt=""></li>
          <li class="mod-marchandise__item"><img src="assets/img/marchandise-jacket.png" alt=""></li>
          <li class="mod-marchandise__item"><img src="assets/img/marchandise-calendar.png" alt=""></li>
          <li class="mod-marchandise__item"><img src="assets/img/marchandise.jpg" alt=""></li>
        </ul>
        <button class="btn btn--black">View all marchandises</button>
      </div>
    </section>
    <section id="supporting">
      <div class="l-col-wrapper">
        <div class="mod-media--youtube"><iframe class="mod-media--youtube-video" width="100%" height="250" src="https://www.youtube.com/embed/Ed3ZeFLt0_I" frameborder="0" allowfullscreen></iframe></div>
        <div class="mod-partOrg">
          <h1 class="mod-partOrg__title">Partnering Organization</h1>
          <ul class="mod-partOrg__items">
            <li id="htci_logo" class="mod-partOrg__item"><a href="/page--with-nav.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo_htci.png" alt=""></a></li>
            <li id="alliance90_logo" class="mod-partOrg__item"><a href="/page--with-nav.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo_alliance19.png" alt=""></a></li>
          </ul>
        </div>
      </div>
      <div class="l-col-wrapper">
        <div id="twitter-timeline" class="mod-media--twitter"><a class="twitter-timeline" href="https://twitter.com/TRiC_INDONESIA">Tweets by TRiC_INDONESIA</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
      </div>
    </section>

<?php get_footer(); ?>