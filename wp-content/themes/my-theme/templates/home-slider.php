<?php if (have_rows('slides')) : ?>
  <section class="splash-section">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php while( have_rows('slides') ): the_row(); 
          // vars
          $image = get_sub_field('image');
          $dark_image = get_sub_field('dark_image');
          $title = get_sub_field('title');
          $description = get_sub_field('description');
          $buy_ticket_link = get_sub_field('buy_ticket_link');
          $learn_more_link = get_sub_field('learn_more_link');
          ?>
          <div class="swiper-slide">
            <div class="splash-image<?php if($dark_image): echo ' dark'; endif;?>" style="background-image: url('<?= $image['url']; ?>')">
              <div class="container">
                <div class="splash-content">
                  <header class="title">
                    <h1><?= $title ?></h1>
                  </header>
                  <div class="splash-divider"></div>
                  <div class="content">
                    <?= $description ?>
                  </div>
                  <div class="button primary">
                    <a class="btn" href="<?= $buy_ticket_link ?>" title="Buy Tickets">Buy tickets</a>
                  </div>
                  <div class="button secondary">
                    <a class="btn" href="<?= $learn_more_link ?>" title="Learn More">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="splash-prev"></div>
    <div class="splash-next"></div>
    <div class="splash-pagination"></div>
  </section>
  <div class="splash-triangle">
    <span></span>
  </div>
<?php endif; ?>



