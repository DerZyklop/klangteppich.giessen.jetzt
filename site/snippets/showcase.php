<?php

$projects = page('lineup')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="showcase grid gutter-1">

  <?php foreach($projects as $project): ?>

    <li class="showcase-item column">
        <a href="<?= $project->url() ?>" class="showcase-link">
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 400); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <div class="showcase-title">
              <h3 style="margin-bottom:0.4em"><?= $project->title()->html() ?></h3>
              <span><?= $project->meta()->html() ?></span>
            </div>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>
