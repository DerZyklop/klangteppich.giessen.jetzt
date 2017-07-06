<!doctype html>

<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/index.css') ?>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700" rel="stylesheet">

</head>
<body style="min-height:800px">

  <header class="header wrap wide" role="banner" style="margin-bottom: 1em">
    <div class="grid">

      <div class="branding column">
        <a href="<?= url() ?>" rel="home">
          <img src="<?= url('assets/images/klung.svg') ?>" alt="Thumbnail for" class="showcase-image" style="max-width: 100%; width: 70px" />
        </a>
      </div>

      <?php snippet('menu') ?>

    </div>
  </header>
