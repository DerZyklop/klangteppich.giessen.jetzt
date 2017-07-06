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
      <!-- <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div> -->

    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

<!--
    <section class="projects-section">

      <div class="wrap wide">
        <h2>Freunde</h2>
        <?php #snippet('showcase', ['limit' => 3]) ?>

        <div class="intro text wrap">
          <?= page('freunde')->text()->kirbytext() ?>
          <hr>
        </div>

        <?php snippet('showcase') ?>
      </div>

    </section>
-->
  </main>

<?php snippet('footer') ?>
