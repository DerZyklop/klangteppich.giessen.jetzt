<?php snippet('header') ?>

  <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): $thumb = $image; ?>
    <div style="max-width: 1224px; margin: auto; padding-bottom: 1.5rem;">
      <div style="margin: 0 1.5em;">
        <div style="padding: 0.2rem; background: #fff;">
          <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $page->title()->html() ?>" class="showcase-image" />
        </div>
      </div>
    </div>
  <?php endif ?>
  <main class="main" role="main">

    <header class="wrap">
      <!-- <h1><?= $page->title()->html() ?></h1> -->
      <?php if ($page->hasIntro()) : ?>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
      <?php endif; ?>
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>
