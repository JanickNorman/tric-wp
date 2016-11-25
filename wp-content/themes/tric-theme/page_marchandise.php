<?php
/*
Template Name: Marchandise Page
*/
?>

<?php get_header() ?>

    <div class="breadcrumb">
      <div class="breadcrumb__item"><a href="/">Home</a></div>
      <div class="breadcrumb__item"><a href="/events.html">Events</a></div>
      <div class="breadcrumb__item breadcrumb__item--last"><span>Tour de Poncol Jilid 2</span></div>
    </div>
    <div class="marchandise__main">
      <div class="marchandise__header-wrapper">
        <header class="marchandise__header-title">
          <h1>Marchandise</h1>
        </header>
        <div class="marchandise__collection-tags">
          <select id="marchandise__collection-selector" name="marchandise__collection-selector">
            <option value="/marchandise/">All</option>
            <option value="/marchandise/?category=kaos">Kaos</option>
            <option value="/marchandise/?category=helm">Helm</option>
          </select>
        </div>
      </div>
      <ul class="marchandise__catalog">
        <li class="marchandise__product"><a href="#" title="Kaos Tigers Rider Club Indonesia">
            <div class="marchandise__product-image-wrapper"><img src="assets/img/marchandise.jpg" alt="" class="marchandise__product-image"></div>
            <div class="marchandise__product-description">
              <h4 class="marchandise__product-name">Marchandise nama</h4>
              <div class="marchandise__price">Rp. 35.000</div>
            </div></a></li>
        <li class="marchandise__product"><a href="#" title="Kaos Tigers Rider Club Indonesia">
            <div class="marchandise__product-image-wrapper"><img src="assets/img/marchandise-jacket.png" alt="" class="marchandise__product-image"></div>
            <div class="marchandise__product-description">
              <h4 class="marchandise__product-name">Marchandise nama</h4>
              <div class="marchandise__price">Rp. 35.000</div>
            </div></a></li>
        <li class="marchandise__product"><a href="#" title="Kaos Tigers Rider Club Indonesia">
            <div class="marchandise__product-image-wrapper"><img src="assets/img/marchandise-calendar.png" alt="" class="marchandise__product-image"></div>
            <div class="marchandise__product-description">
              <h4 class="marchandise__product-name">Marchandise nama</h4>
              <div class="marchandise__price">Rp. 35.000</div>
            </div></a></li>
        <li class="marchandise__product"><a href="#" title="Kaos Tigers Rider Club Indonesia">
            <div class="marchandise__product-image-wrapper"><img src="assets/img/marchandise.jpg" alt="" class="marchandise__product-image"></div>
            <div class="marchandise__product-description">
              <h4 class="marchandise__product-name">Marchandise nama</h4>
            </div></a></li>
        <li class="marchandise__product"><a href="#" title="Kaos Tigers Rider Club Indonesia">
            <div class="marchandise__product-image-wrapper"><img src="assets/img/marchandise-calendar.png" alt="" class="marchandise__product-image"></div>
            <div class="marchandise__product-description">
              <h4 class="marchandise__product-name">Marchandise nama</h4>
              <div class="marchandise__price">Rp. 35.000</div>
            </div></a></li>
        <li class="marchandise__product"><a href="#" title="Kaos Tigers Rider Club Indonesia">
            <div class="marchandise__product-image-wrapper"><img src="assets/img/marchandise.jpg" alt="" class="marchandise__product-image"></div>
            <div class="marchandise__product-description">
              <h4 class="marchandise__product-name">Marchandise nama</h4>
            </div></a></li>
      </ul>
      <div class="marchandise__pagination-wrapper">
        <div class="pagination pagination__list">
          <div class="pagination__wrapper"><a href="#" class="pagination__nav pagination__nav--first"><span class="pagination__first-nav">First</span></a><a href="#" class="pagination__nav pagination__nav--previous"><</a><a href="#" class="pagination__nav">8</a><a href="#" class="pagination__nav">9</a><span class="pagination__nav pagination__nav--current">10</span><a href="#" class="pagination__nav">11</a><a href="#" class="pagination__nav">12</a><a href="#" class="pagination__nav pagination__nav--next">></a><a href="#" class="pagination__nav pagination__nav--last"><span class="pagination__first-nav">Last</span></a></div>
        </div>
      </div>
    </div>

<?php get_footer() ?>