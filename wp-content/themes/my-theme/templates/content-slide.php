<?php 
  $image = get_field('image');
?>
<div class="splash-image" style="background-image: url('<?= $image['url']; ?>')">
  <div class="container">
    <div class="splash-content">
      <header class="title">
        <h1><?= the_title()?></h1>
      </header>
      <div class="splash-divider"></div>
      <div class="content">
        <?= get_field('description')?>
      </div>
      <div class="other">
        <?= get_field('other')?>
      </div>
      <div class="button primary">
        <a class="btn" href="<?= get_field('buy_ticket_link')?>" title="Buy Tickets">Buy tickets</a>
      </div>
      <div class="button secondary">
        <a class="btn" href="<?= get_field('learn_more_link')?>" title="Learn More">Learn more</a>
      </div>
    </div>
  </div>
</div>
