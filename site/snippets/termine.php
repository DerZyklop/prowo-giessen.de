<?php

$projects = $items;

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

<div class="termine row">
  <?php $i = $projects->count(); ?>
  <?php foreach($projects as $project): ?>
    <?php $i-- ?>
    <div class="<?php if ($i < 3) {
      echo 'col-sm';
    } else {
      echo 'col-sm-4';
    } ?>">
      <a href="<?= $project->url() ?>"
        >
        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
          <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" />
        <?php endif ?>
        <div>
          <h3><?= $project->title()->html() ?></h3>
          <h5><?= $project->schedule()->html() ?></h5>
        </div>
      </a>
    </div>

  <?php endforeach ?>

</div>
