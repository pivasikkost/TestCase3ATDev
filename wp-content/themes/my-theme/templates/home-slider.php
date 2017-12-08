<?php if (have_rows('slides')) : ?>
  <section class="splash-section">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php while( have_rows('slides') ): the_row(); 
          // vars
          $title = get_sub_field('title');
          $description = get_sub_field('description');
          $buy_ticket_link = get_sub_field('buy_ticket_link');
          $learn_more_link = get_sub_field('learn_more_link');
          ?>
          <div class="swiper-slide">
            <div class="splash-image<?php if(get_sub_field('dark_image')): echo ' dark'; endif;?>" 
              style="background-image: url('<?= get_sub_field('image')['url']; ?>')">
              <div class="container">
                <div class="row">
                  <div class="splash-content">
                    <?php if( $title ): ?>
                      <header class="title">
                        <h1><?= $title ?></h1>
                      </header>
                    <?php endif; ?>
                    <?php if( $title && $description ): ?>
                      <div class="splash-divider"></div>
                    <?php endif; ?>
                    <?php if( $description ): ?>
                      <div class="content">
                        <?= $description ?>
                      </div>
                    <?php endif; ?>
                    <?php if( $buy_ticket_link ): ?>
                      <div class="button primary">
                        <a class="btn" href="<?= $buy_ticket_link ?>" title="Buy Tickets">Buy tickets</a>
                      </div>
                    <?php endif; ?>
                    <?php if( $learn_more_link ): ?>
                      <div class="button secondary">
                        <a class="btn" href="<?= $learn_more_link ?>" title="Learn More">Learn more</a>
                      </div>
                    <?php endif; ?>
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



