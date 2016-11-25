<?php /* Template Name: Page Without Nav */ ?>
<?php get_header() ?>

<?php

$image = get_field('poster');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {
	// vars
	$url = $image['url'];
	$title = $image['title'];
	$alt = $image['alt'];
	$caption = $image['caption'];

	// thumbnail
	$size = 'large';
	$thumb = $image['sizes'][ $size ];

	echo wp_get_attachment_image( $image, $size );

}

 ?>

<!--     <div class="breadcrumb">
      <div class="breadcrumb__item"><a href="/">Home</a></div>
      <div class="breadcrumb__item"><a href="/events.html">Events</a></div>
      <div class="breadcrumb__item breadcrumb__item--last"><span>Tour de Poncol Jilid 2</span></div>
    </div> -->
    <section id="page-main">
      <div class="page__wrapper">
        <h1 class="page__title page__title--center"><?php the_title() ?></h1>
        <?php echo wp_get_attachment_image( $image, $size ); ?>
        <div class="page__content-main">
          <div class="page__content-gallery"><img src="<?php echo $thumb ?>" alt="" class="page__content-gallery-main"></div>
          <div class="page__content-meta">Event started: <?php echo get_field('event_started') ?></div>
          <div class="page__content-meta">Location: <?php echo get_field('location') ?></div>
          <div class="page__content-meta">Jam: <?php echo get_field('jam') ?></div>
          <div class="page__content-read"><p>Lorem ipsum dolor sit amet, consect</p><ul><li>Quod si ita sit, cur opera philosophiae sit danda nescio.</li></ul><p>An eiusdem modi? <b>Sed fac ista esse non inportuna;</b> <b>At certe gravius.</b> <code>Praeclarae mortes sunt imperatoriae;</code> <a href='http://loripsum.net/' target='_blank'>Quo igitur, inquit, modo?</a> <mark>Nescio quo modo praetervolavit oratio.</mark> Et hercule-fatendum est enim, quod sentio -mirabilis est apud illos contextus rerum. <a href='http://loripsum.net/' target='_blank'>Pollicetur certe.</a> </p><p>Apud ceteros autem philosophos, qui quaesivit aliquid, tacet; Hoc loco tenere se Triarius non potuit. Quae duo sunt, unum facit. Nunc vero a primo quidem mirabiliter occulta natura est nec perspici nec cognosci potest. Idemque diviserunt naturam hominis in animum et corpus. Haec et tu ita posuisti, et verba vestra sunt. <i>Bestiarum vero nullum iudicium puto.</i> Duo enim genera quae erant, fecit tria.</p><pre>At quicum ioca seria, ut dicitur, quicum arcana, quicumocculta omnia?An ea, quae per vinitorem antea consequebatur, per se ipsacurabit?</pre><dl><dt><dfn>Tu quidem reddes;</dfn></dt><dd>Quam ob rem tandem, inquit, non satisfacit?</dd><dt><dfn>Est, ut dicis, inquit;</dfn></dt><dd>Ergo hoc quidem apparet, nos ad agendum esse natos.</dd><dt><dfn>Falli igitur possumus.</dfn></dt><dd>Quamquam ab iis philosophiam et omnes ingenuas disciplinas habemus;</dd><dt><dfn>Scrupulum, inquam, abeunti;</dfn></dt><dd>Etsi ea quidem, quae adhuc dixisti, quamvis ad aetatem recte isto modo dicerentur.</dd></dl></div>
          <div class="page__content-meta-update"><strong>Last updated:</strong> 27 July 2016</div>
          <ul class="page__social-share">
            <li class="page__social-share-item"><a class="page__social-share-link page__social-share-link--facebook">fb</a></li>
            <li class="page__social-share-item"><a class="page__social-share-link page__social-share-link--twitter">fb</a></li>
            <li class="page__social-share-item"><a class="page__social-share-link page__social-share-link--googleplus">tw</a></li>
            <li class="page__social-share-item"><a class="page__social-share-link page__social-share-link--instagram">g+</a></li>
          </ul>
          <div class="page__related-content">
            <h3>Related Content</h3>
            <ul>
              <li class="page__related-content-item"><a>Tour de jemper</a></li>
              <li class="page__related-content-item"><a>Cara merawat motor yang baik</a></li>
            </ul>
          </div>
          <div class="page__comment-box"></div>
        </div>
      </div>
    </section>


<?php get_footer() ?>