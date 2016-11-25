<?php
/*
Template Name: Media Page
*/
?>

<?php get_header() ?>
    <div class="breadcrumb">
      <div class="breadcrumb__item"><a href="/">Home</a></div>
      <div class="breadcrumb__item"><a href="/events.html">Events</a></div>
      <div class="breadcrumb__item breadcrumb__item--last"><span>Tour de Poncol Jilid 2</span></div>
    </div>
    <section id="media-main">
      <div class="media-video">
        <h1 class="media-video__header">Video</h1>
        <ul class="media-video__list">
          <li class="media-video__item">
            <div class="media-video__container">.media-video__container</div>
          </li>
          <li class="media-video__item">
            <div class="media-video__container">.media-video__container</div>
          </li>
          <li class="media-video__item">
            <div class="media-video__container">.media-video__container</div>
          </li>
          <li class="media-video__item">
            <div class="media-video__container">.media-video__container</div>
          </li>
          <li class="media-video__item media-video--hidden">
            <div class="media-video__container">.media-video__container</div>
          </li>
          <li class="media-video__item media-video--hidden">
            <div class="media-video__container">.media-video__container</div>
          </li>
        </ul>
        <div class="media-video__button-wrapper">
          <button class="btn btn--black">View all videos</button>
        </div>
      </div>
      <div class="media-gallery">
        <h1 class="media-gallery__header">Gallery</h1>
        <ul class="media-gallery__list">
          <li class="media-gallery__item"><img src="assets/img/webbanner.jpg" alt="" class="media-gallery__container"></li>
          <li class="media-gallery__item"><img src="assets/img/webbanner.jpg" alt="" class="media-gallery__container"></li>
          <li class="media-gallery__item"><img src="assets/img/webbanner.jpg" alt="" class="media-gallery__container"></li>
          <li class="media-gallery__item"><img src="assets/img/webbanner.jpg" alt="" class="media-gallery__container"></li>
        </ul>
        <div class="media-gallery__button-wrapper">
          <button class="btn btn--black">View all gallery</button>
        </div>
      </div>
    </section>

<?php get_footer() ?>