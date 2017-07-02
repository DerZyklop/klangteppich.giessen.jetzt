<?php snippet('header') ?>

  <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): $thumb = $image; ?>
    <div style="max-width: 1224px; margin: auto;">
      <div style="padding: 0.2rem; background: #fff;">
        <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $page->title()->html() ?>" class="showcase-image" />
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

    <section class="projects-section">

      <div class="wrap wide">
        <h2>Freunde</h2>
        <?php #snippet('showcase', ['limit' => 3]) ?>

        <div class="intro text wrap">
          <?= page('freunde')->text()->kirbytext() ?>
          <hr>
        </div>

        <?php snippet('showcase') ?>
        <!-- <p class="projects-section-more"><a href="<?= page('freunde')->url() ?>" class="btn">show all projects &hellip;</a></p> -->
      </div>

    </section>

  </main>

<?php snippet('footer') ?>
